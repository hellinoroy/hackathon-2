<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;

class CartController extends Controller
{

    public function index(Request $request)
    {
        $user = $request->user();

        if (!$user) {
            return response()->json(['message' => 'Unauthenticated.'], 401);
        }
        $cart = Cart::with('product')->where('user_id', $user->id)->get();

        return response()->json($cart);
    }

    public function store(Request $request)
    {
        $user = $request->user();
        $validated = $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $cartItem = Cart::where('user_id', $user->id)
            ->where('product_id', $validated['product_id'])
            ->first();
        if ($cartItem) {
            $cartItem->quantity += $validated['quantity'];
            $cartItem->save();
        } else {
            $cartItem = Cart::create([
                'user_id' => $user->id,
                'product_id' => $validated['product_id'],
                'quantity' => $validated['quantity'],
            ]);
        }

        return response()->json($cartItem, 201);
    }

    public function update(Request $request, Cart $cart)
    {
        if ($request->user()->id !== $cart->user_id) {
            return response()->json(['message' => 'Unauthorized'], 403);
        }
        $validated = $request->validate([
            'quantity' => 'required|integer|min:1',
        ]);

        $cart->update($validated);
        return response()->json($cart);
    }


    public function destroy(Request $request, Cart $cart)
    {
        if ($request->user()->id !== $cart->user_id) {
            return response()->json(['message' => 'Unauthorized'], 403);
        }

        $cart->delete();
        return response()->json(null, 204);
    }
}

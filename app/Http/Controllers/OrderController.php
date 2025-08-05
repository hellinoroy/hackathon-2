<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->user();
        if (!$user) {
            return response()->json(['message' => 'Unauthenticated.'], 401);
        }
        $orders = Order::with('details.product')->where('user_id', $user->id)->get();
        return response()->json($orders);
    }

    public function indexAdmin(Request $request)
    {
        $orders = Order::all();
        return response()->json($orders);
    }

    public function store(Request $request)
    {
        $user = $request->user();

        if (!$user) {
            return response()->json(['message' => 'Unauthenticated.'], 401);
        }
        // contoh struktur data: 
        // {
        //   "products": [
        //     {
        //       "id": 1,
        //       "quantity": 2
        //     },
        //     {
        //       "id": 5,
        //       "quantity": 1
        //     },
        //     {
        //       "id": 12,
        //       "quantity": 3
        //     }
        //   ]
        // }
        $validatedData = $request->validate([
            'products' => 'required|array',
            'products.*.id' => 'required|exists:products,id',
            'products.*.quantity' => 'required|integer|min:1',
        ]);

        try {
            DB::beginTransaction();

            $totalPrice = 0;
            $order = Order::create([
                'user_id' => $user->id,
                'total_price' => 0,
                'status' => 'pending',
            ]);

            foreach ($validatedData['products'] as $productData) {
                $product = Product::find($productData['id']);

                $itemPrice = $product->price * $productData['quantity'];
                $totalPrice += $itemPrice;

                OrderDetail::create([
                    'order_id' => $order->id,
                    'product_id' => $product->id,
                    'quantity' => $productData['quantity'],
                    'price' => $product->price,
                ]);
            }

            $order->total_price = $totalPrice;
            $order->save();
            DB::commit();
            $order->load('details.product');
            return response()->json($order, 201);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['message' => 'Failed to create order.'], 500);
        }
    }

    public function show(Request $request, Order $order)
    {
        $order->load('details.product');
        return response()->json($order);
    }

    public function update(Request $request, Order $order)
    {
        $validatedData = $request->validate([
            'status' => 'required|string|in:pending,shipped,delivered,cancelled,completed',
        ]);

        try {
            DB::beginTransaction();
            $order->update($validatedData);

            if ($order->status === 'completed') {
                $details = OrderDetail::where('order_id', $order->id)->get();
                foreach ($details as $detail) {
                    $product = Product::find($detail->product_id);
                    if ($product) {
                        $product->decrement('quantity', $detail->quantity);
                    }
                }
            }
            DB::commit();
            $order->load('details.product');
            return response()->json($order);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['message' => 'Failed to update order status.'], 500);
        }
    }

    // public function destroy(Request $request, Order $order)
    // {
    //     $order->delete();
    //     return response()->json(null, 204);
    // }
}

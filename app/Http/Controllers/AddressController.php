<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Address;

class AddressController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->user();
        if (!$user) {
            return response()->json(['message' => 'Unauthenticated.'], 401);
        }
        $addresses = Address::where('user_id', $user->id)->get();
        return response()->json($addresses);
    }

    public function store(Request $request)
    {
        $user = $request->user();
        $validatedData = $request->validate([
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'state' => 'nullable|string|max:255',
            'postal_code' => 'required|string|max:255',
            'country' => 'required|string|max:255',
        ]);

        $validatedData['user_id'] = $user->id;
        $address = Address::create($validatedData);
        return response()->json($address, 201);
    }

    public function show(Request $request, Address $address)
    {
        if ($request->user()->id !== $address->user_id) {
            return response()->json(['message' => 'Unauthorized'], 403);
        }
        return response()->json($address);
    }

    public function update(Request $request, Address $address)
    {
        if ($request->user()->id !== $address->user_id) {
            return response()->json(['message' => 'Unauthorized'], 403);
        }

        $validatedData = $request->validate([
            'address' => 'string|max:255',
            'city' => 'string|max:255',
            'state' => 'nullable|string|max:255',
            'postal_code' => 'string|max:255',
            'country' => 'string|max:255',
        ]);

        $address->update($validatedData);

        return response()->json($address);
    }

    public function destroy(Request $request, Address $address)
    {
        if ($request->user()->id !== $address->user_id) {
            return response()->json(['message' => 'Unauthorized'], 403);
        }
        $address->delete();
        return response()->json(null, 204);
    }
}

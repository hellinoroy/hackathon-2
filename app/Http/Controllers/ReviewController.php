<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use App\Models\Product;

class ReviewController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->user();
        if (!$user) {
            return response()->json(['message' => 'Unauthenticated.'], 401);
        }
        $reviews = Review::where('user_id', $user->id)->get();
        return response()->json($reviews);
    }

    public function indexAdmin()
    {
        $reviews = Review::all();
        return response()->json($reviews);
    }

    public function store(Request $request)
    {
        $user = $request->user();
        $validatedData = $request->validate([
            'product_id' => 'required|exists:products,id',
            'review' => 'required|string',
        ]);
        $validatedData['user_id'] = $user->id;
        $review = Review::create($validatedData);
        return response()->json($review, 201);
    }

    public function update(Request $request, Review $review)
    {
        if ($request->user()->id !== $review->user_id) {
            return response()->json(['message' => 'Unauthorized'], 403);
        }
        $validatedData = $request->validate([
            'review' => 'required|string',
        ]);
        $review->update($validatedData);
        return response()->json($review);
    }

    public function destroy(Request $request, Review $review)
    {
        if ($request->user()->id == $review->user_id || $request->user()->role == "admin") {
            $review->delete();
            return response()->json(null, 204);
        } else {
            return response()->json(['message' => 'Unauthorized'], 403);
        }
    }
}

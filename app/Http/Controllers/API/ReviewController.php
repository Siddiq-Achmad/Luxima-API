<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\ReviewResource;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $reviews = ReviewResource::collection(Review::with('user.details')->latest()->paginate(10));

        if (!empty($reviews)) {
            return response()->json([
                'status' => 'success',
                'message' => 'Data Review',
                'data' => ReviewResource::collection($reviews),
                'length' => count($reviews)
            ], 200);
        } {
            return response()->json([
                'status' => 'error',
                'message' => 'Data Review Not Found',
                'data' => [],
                'length' => 0
            ], 404);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = Auth::guard('api')->user();

        if (!$user->hasRole(['administrator', 'admin', 'vendor'])) {
            return response()->json([
                'success' => false,
                'message' => 'Anda tidak memiliki izin untuk menambahkan review.'
            ], 403);
        }


        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'vendor_id' => 'nullable|exists:vendors,id',
            'service_id' => 'nullable|exists:services,id',
            'event_id' => 'nullable|exists:events,id',
            'rating' => 'required|integer|min:1|max:5',
            'title' => 'nullable|string|max:255',
            'content' => 'nullable|string',
        ]);

        $review = Review::create($validated);

        return new ReviewResource($review);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // if (!$review) {
        //     return response()->json([
        //         'status' => 'error',
        //         'message' => 'Data Review Not Found',
        //         'data' => [],
        //     ], 404);
        // } else {
        //     return response()->json([
        //         'status' => 'success',
        //         'message' => 'Data Review',
        //         'data' => new ReviewResource($review),
        //     ], 200);
        // }
        try {
            $review = Review::findOrFail($id); // Jika tidak ditemukan, langsung throw 404
            return response()->json([
                'success' => true,
                'data' => $review
            ], 200);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'success' => false,
                'message' => "Review dengan ID $id tidak ditemukan"
            ], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $user = Auth::guard('api')->user();
        $review = Review::findOrFail($id);

        if (!$user->hasRole('admin') && $user->id !== $review->user_id) {
            return response()->json([
                'success' => false,
                'message' => 'Anda tidak memiliki izin untuk mengedit review ini.'
            ], 403);
        }

        $request->validate([
            'rating' => 'integer|min:1|max:5',
            'title' => 'nullable|string|max:255',
            'content' => 'nullable|string',
        ]);

        $review->update($request->only(['rating', 'title', 'content']));

        return new ReviewResource($review);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user = Auth::guard('api')->user();
        $review = Review::findOrFail($id);

        if (!$user->hasRole('admin') && $user->id !== $review->user_id) {
            return response()->json([
                'success' => false,
                'message' => 'Anda tidak memiliki izin untuk menghapus review ini.'
            ], 403);
        }

        $review->delete();

        return response()->json([
            'success' => true,
            'message' => 'Review berhasil dihapus.'
        ], 200);
    }
}

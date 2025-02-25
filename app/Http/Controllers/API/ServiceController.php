<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\ServiceResource;
use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $services = ServiceResource::collection(Service::latest()->paginate(10));

        if (!empty($services)) {
            return response()->json([
                'status' => 'success',
                'message' => 'Data Service',
                'data' => ServiceResource::collection($services),
                'length' => count($services)
            ], 200);
        } {
            return response()->json([
                'status' => 'error',
                'message' => 'Data Service Not Found',
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

        // Cek apakah user memiliki role yang diizinkan
        $user = Auth::guard('api')->user();

        if (!$user->hasRole(['administrator', 'admin', 'vendor'])) {
            return response()->json([
                'success' => false,
                'message' => 'Anda tidak memiliki izin untuk menambahkan review.',
            ], 403);
        }
        //
        $data = $request->validate([
            'vendor_id' => 'required|exists:vendors,id',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|string',
            'thumbnail' => 'nullable|string',
            'status' => 'boolean',
            'unit' => 'nullable|string|max:50',
            'duration' => 'integer|min:0',
            'price' => 'required|integer|min:0',
            'discount' => 'integer|min:0|max:100',
            'discount_price' => 'integer|min:0',
            'views' => 'integer|min:0',
            'likes' => 'integer|min:0',
            'dislikes' => 'integer|min:0',
            'rating' => 'integer|min:0|max:5',
            'review_count' => 'integer|min:0',
        ]);

        $service = Service::create($data);

        return new ServiceResource($service);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        //return new ServiceResource($service->load('vendor'));
        try {
            $service = Service::findOrFail($id); // Jika tidak ditemukan, langsung throw 404
            return response()->json(
                [
                    'success' => true,
                    'data' => new ServiceResource($service->load('vendor'))
                ],
                200
            );
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'success' => false,
                'message' => "Layanan dengan ID $id tidak ditemukan"
            ], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $user = Auth::guard('api')->user();
        $service = Service::findOrFail($id);

        if (!$user->hasRole('admin') && $user->id !== $service->user_id) {
            return response()->json([
                'success' => false,
                'message' => 'Anda tidak memiliki izin untuk mengedit Layanan ini.'
            ], 403);
        }

        $data = $request->validate([
            'title' => 'string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|string',
            'thumbnail' => 'nullable|string',
            'status' => 'boolean',
            'unit' => 'nullable|string|max:50',
            'duration' => 'integer|min:0',
            'price' => 'integer|min:0',
            'discount' => 'integer|min:0|max:100',
            'discount_price' => 'integer|min:0',
            'views' => 'integer|min:0',
            'likes' => 'integer|min:0',
            'dislikes' => 'integer|min:0',
            'rating' => 'integer|min:0|max:5',
            'review_count' => 'integer|min:0',
        ]);

        $service->update($data);

        return new ServiceResource($service);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user = Auth::guard('api')->user();
        $service = Service::findOrFail($id);

        if (!$user->hasRole('admin') && $user->id !== $service->user_id) {
            return response()->json([
                'success' => false,
                'message' => 'Anda tidak memiliki izin untuk menghapus Layanan ini.'
            ], 403);
        }
    }
}

<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;

use App\Http\Resources\TestimonialResource;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Auth;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $testimonials = TestimonialResource::collection(
            Testimonial::with('user.details')->where('is_approved', true)->latest()->paginate(10)
        );

        if (!empty($testimonials)) {
            return response()->json([
                'status' => 'success',
                'message' => 'Data Testimonial',
                'data' => TestimonialResource::collection($testimonials),
                'length' => count($testimonials)
            ], 200);
        } {
            return response()->json([
                'status' => 'error',
                'message' => 'Data Testimonial Not Found',
                'data' => [],
                'length' => 0
            ], 404);
        }

        // $testimonials = Testimonial::with(['user.details'])->where('is_approved', true)->get();

        // $data = $testimonials->map(function ($testimonial) {
        //     return [
        //         'id' => $testimonial->id,
        //         'name' => optional($testimonial->user)->name,
        //         'email' => optional($testimonial->user)->email,
        //         'occupation' => optional($testimonial->user->details)->occupation,
        //         'quote' => $testimonial->quote,
        //         'is_approved' => $testimonial->is_approved,
        //     ];
        // });

        // return response()->json($data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $user = Auth::guard('api')->user();

        if (!$user->hasRole(['administrator', 'admin', 'vendor'])) {
            return response()->json([
                'success' => false,
                'message' => 'Anda tidak memiliki izin untuk menambahkan review.'
            ], 403);
        }

        $validated = $request->validate([
            'quote' => 'required|string',
        ]);

        $testimonial = $request->user()->testimonials()->create($validated);

        if ($testimonial) {
            return response()->json([
                'status' => 'success',
                'message' => 'Data Testimonial',
                'data' => new TestimonialResource($testimonial),
            ], 200);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Data Testimonial Failed Created',
                'data' => [],
            ], 404);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // if ($testimonial) {
        //     return response()->json([
        //         'status' => 'success',
        //         'message' => 'Data Testimonial',
        //         'data' => new TestimonialResource($testimonial),
        //     ], 200);
        // } else {
        //     return response()->json([
        //         'status' => 'error',
        //         'message' => 'Data Testimonial Not Found',
        //         'data' => [],
        //     ], 404);
        // }

        {
            try {
                $testimonial = Testimonial::findOrFail($id);
                return response()->json([
                    'success' => true,
                    'data' => new TestimonialResource($testimonial)
                ], 200);
            } catch (ModelNotFoundException $e) {
                return response()->json([
                    'success' => false,
                    'message' => "Testimonial dengan ID $id tidak ditemukan"
                ], 404);
            }
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        $this->authorize('update', $testimonial);

        $validated = $request->validate([
            'quote' => 'sometimes|string',
            'is_approved' => 'sometimes|boolean',
        ]);

        $testimonial->update($validated);

        if ($testimonial) {
            return response()->json([
                'status' => 'success',
                'message' => 'Data Testimonial',
                'data' => new TestimonialResource($testimonial),
            ], 200);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Data Testimonial Failed Updated',
                'data' => [],
            ], 404);
        }
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimonial $testimonial)
    {
        $this->authorize('delete', $testimonial);
        $testimonial->delete();

        return response()->json(['message' => 'Testimonial deleted successfully'], Response::HTTP_NO_CONTENT);
    }
}

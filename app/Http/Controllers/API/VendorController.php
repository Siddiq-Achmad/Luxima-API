<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Vendor;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Resources\VendorResource;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $vendors = Vendor::all();
        $length = count($vendors);
        if (!empty($vendors)) {
            return response()->json([
                'status' => 'success',
                'message' => 'Data Vendor',
                'data' => VendorResource::collection($vendors),
                'length' => $length
            ], 200);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Data Vendor Not Found',
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        //
        $vendor = Vendor::where('slug', $slug)->first();


        if (!empty($vendor)) {
            return response()->json([
                'status' => 'success',
                'message' => 'Data Vendor',
                'data' => new VendorResource($vendor),
            ], 200);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Data Vendor Not Found',
                'data' => [],
            ], 404);
        }
    }

    public function byCategory($slug)
    {
        //
        $category = Category::with('vendors')->where('slug', $slug)->first();
        $vendors = $category->vendors;
        $length = count($vendors);
        if (!empty($vendors)) {
            return response()->json([
                'status' => 'success',
                'message' => 'Data Vendor',
                'data' => VendorResource::collection($vendors),
                'length' => $length
            ], 200);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Data Vendor Not Found',
                'data' => [],
                'length' => 0
            ], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vendor $vendor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vendor $vendor)
    {
        //
    }
}

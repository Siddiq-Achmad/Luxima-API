<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Vendor;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Resources\VendorResource;



class VendorController extends Controller
{

    public function index(Request $request)
    {
        //
        $vendors = Vendor::all();
        $length = count($vendors);
        if (!empty($vendors)) {
            return response()->json([
                'status' => 'success',
                'message' => 'Data Vendors',
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




    public function search(Request $request)
    {
        $request->validate([
            'q' => 'nullable|string|max:200',
            'category' => 'nullable|string|max:200',
            'location' => 'nullable|string|max:200',
        ]);
        // Ambil parameter query string
        $search = $request->input('q'); // Kata kunci pencarian
        $category = $request->input('category'); // Kategori
        $location = $request->input('location'); // Lokasi

        // Query dasar untuk mencari vendor
        $query = Vendor::query();

        // Menerapkan filter berdasarkan keyword (search) jika ada
        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', '%' . $search . '%')
                    ->orWhere('description', 'like', '%' . $search . '%');
            });
        }

        // Menerapkan filter berdasarkan kategori jika ada
        if ($category) {
            $query->whereHas('category', function ($q) use ($category) {
                $q->where('name', $category);
            });
        }

        // Menerapkan filter berdasarkan lokasi jika ada
        if ($location) {
            $query->whereHas('location', function ($q) use ($location) {
                $q->where('city', $location);
            });
        }

        // Eksekusi query dan ambil hasil dengan relasi
        $vendors = $query->with(['category', 'location'])->get();

        $length = count($vendors);

        if (!empty($vendors)) {
            return response()->json([
                'status' => 'success',
                'message' => 'Search Result Data Vendor',
                'data' => VendorResource::collection($vendors),
                'query' => $request->all(),
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


    public function show($slug)
    {
        //
        $vendor = Vendor::where('slug', $slug)->first();


        if (!empty($vendor)) {
            return response()->json([
                'status' => 'success',
                'message' => 'Data Vendor Detail | ' . $vendor->name,
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
        $vendors = $category->vendors ?? [];
        $length = count($vendors);
        if (!empty($vendors)) {
            return response()->json([
                'status' => 'success',
                'message' => 'Data Vendor by Category | ' . ucwords($slug),
                'data' => VendorResource::collection($vendors),
                'length' => $length
            ], 200);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Data not Found',
                'code' => 404,
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

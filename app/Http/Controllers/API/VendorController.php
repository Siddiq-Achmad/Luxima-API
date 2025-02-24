<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Vendor;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Resources\VendorResource;
use App\Models\Location;

class VendorController extends Controller
{

    public function index(Request $request)
    {
        //

        // Jumlah item per halaman, default ke 12 jika tidak ada parameter `limit`
        $perPage = $request->input('limit', 12);

        // Query data dengan pagination
        $vendors = Vendor::paginate($perPage);
        $length = count($vendors);

        // $vendors = Vendor::all();
        // $length = count($vendors);

        if (!empty($vendors)) {
            return response()->json([
                'status' => 'success',
                'message' => 'Data Vendors',
                'data' => VendorResource::collection($vendors),
                'length' => $length,
                'currentPage' => $vendors->currentPage(),
                'totalPages' => $vendors->lastPage(),
                'totalItems' => $vendors->total(),
                'perPage' => $vendors->perPage(),
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
        $query = $request->input('q'); // Kata kunci pencarian
        $category = $request->input('category'); // Kategori
        $location = $request->input('location'); // Lokasi



        // Query database
        $vendors = Vendor::query();

        // Filter berdasarkan nama atau deskripsi
        if ($query) {
            $vendors->where(function ($q) use ($query) {
                $q->where('name', 'LIKE', "%{$query}%")
                    ->orWhere('description', 'LIKE', "%{$query}%");
            });
        }
        // Filter berdasarkan lokasi (gunakan relasi location)
        if ($location) {
            $vendors->whereHas('location', function ($q) use ($location) {
                $q->where('city', 'LIKE', "%{$location}%");
            });
        }

        // Filter berdasarkan kategori (gunakan relasi category)
        if ($category) {
            $vendors->whereHas('category', function ($q) use ($category) {
                $q->where('name', 'LIKE', "%{$category}%");
            });
        }

        // Eksekusi query dan ambil hasil dengan relasi
        //$result = $query->with(['category', 'location'])->get();
        $results = $vendors->get();

        $length = count($results);

        if (!empty($results)) {
            return response()->json([
                'status' => 'success',
                'message' => 'Search Result Data Vendor',
                'data' => VendorResource::collection($results),
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


    public function byCategory($category)
    {
        //
        $categories = Category::with('vendors')->where('slug', $category)->first();
        $vendors = $categories->vendors ?? [];
        $length = count($vendors);
        if (!empty($vendors)) {
            return response()->json([
                'status' => 'success',
                'message' => 'Data Vendor by Category | ' . ucwords($category),
                'data' => $length > 0 ? VendorResource::collection($vendors) : "No Data w/ this Category",
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

    public function byLocation($location)
    {
        //
        $locations = Location::with('vendors')->where('slug', $location)->first();
        $vendors = $locations->vendors ?? [];
        $length = count($vendors);
        if (!empty($vendors)) {
            return response()->json([
                'status' => 'success',
                'message' => 'Data Vendor by Location | ' . ucwords($location),
                'data' => $length > 0 ? VendorResource::collection($vendors) : "No Data w/ this Location",
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

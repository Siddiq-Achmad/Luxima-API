<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Vendor;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Resources\VendorResource;


/**
 * @OA\Tag(
 *     name="Vendors",
 *     description="API Endpoints for Vendors"
 * )
 *
 *
 * @OA\SecurityScheme(
 *     securityScheme="passport",
 *     type="oauth2",
 *     description="Gunakan token OAuth2 untuk mengakses endpoint",
 *     @OA\Flow(
 *         flow="password",
 *         tokenUrl="/oauth/token",
 *         scopes={}
 *     )
 * )
 * 
 * @OA\Schema(
 *     schema="Vendor",
 *     type="object",
 *     title="Vendor",
 *     required={"id", "name", "slug", "location"},
 *     @OA\Property(property="id", type="integer", description=" ID vendor"),
 *     @OA\Property(property="name", type="string", description="Vendor name"),
 *     @OA\Property(property="slug", type="string", description="Unique slug for vendor"),
 *     @OA\Property(property="description", type="string", description="Vendor description"),
 *     @OA\Property(property="location", type="string", description="Vendor location"),
 *     @OA\Property(property="category", type="string", description="Vendor category"),
 *     @OA\Property(property="created_at", type="string", format="date-time", description="Vendor created at"),
 *     @OA\Property(property="updated_at", type="string", format="date-time", description="Vendor updated at"),
 *     @OA\Property(property="deleted_at", type="string", format="date-time", description="Vendor deleted at"),
 * )
 */

class VendorController extends Controller
{
    //
    //Get Data API Vendors
    /**
     * @OA\Get(
     *     path="/vendors",
     *     tags={"Vendor"},
     *     summary="Show all vendors",
     *     description="Retrieve a list of all vendors.",
     *     @OA\Response(
     *         response=200,
     *         description="Successfully retrieved vendors",
     *         @OA\JsonContent(
     *             type="array",
     *             @OA\Items(ref="#/components/schemas/Vendor")
     *         )
     *     ),
     *     @OA\Response(
     *         response=401,
     *         description="Unauthorized, token tidak valid"
     *     )
     * )
     */
    public function index()
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

    /**
     * @OA\Get(
     *     path="/search",
     *     tags={"Vendor"},
     *     summary="Search for vendors based on keyword, category, and location",
     *     description="Search for vendors based on a keyword, category, and location.",
     *     @OA\Parameter(
     *         name="q",
     *         in="query",
     *         description="Search keyword",
     *         required=false,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Parameter(
     *         name="category",
     *         in="query",
     *         description="Slug by category",
     *         required=false,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Parameter(
     *         name="location",
     *         in="query",
     *         description="Lokasi vendor",
     *         required=false,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Data Result Search",
     *         @OA\JsonContent(
     *             type="array",
     *             @OA\Items(ref="#/components/schemas/Vendor")
     *         )
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid request parameters"
     *     )
     * )
     */


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

    /**
     * Display the specified resource.
     */

    /**
     * @OA\Get(
     *     path="/vendor/{slug}",
     *     tags={"Vendor"},
     *     summary="Show detail vendor by slug",
     *     description="Retrieve detail data vendor by slug.",
     *     @OA\Parameter(
     *         name="slug",
     *         in="path",
     *         required=true,
     *         description="Unique vendor slug",
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Data Vendor Detail",
     *         @OA\JsonContent(ref="#/components/schemas/Vendor")
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Vendor not found"
     *     )
     * )
     */
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

    /**
     * @OA\Get(
     *     path="/{slug}",
     *     tags={"Vendor"},
     *     summary="Get Data Vendor By Category",
     *     description="Retrieve a list of vendors by category.",
     *     @OA\Parameter(
     *         name="slug",
     *         in="path",
     *         required=true,
     *         description="Unique Slug",
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Vendor dengan kategori ",
     *         @OA\JsonContent(
     *             type="array",
     *             @OA\Items(ref="#/components/schemas/Vendor")
     *         )
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Vendor tidak ditemukan"
     *     )
     * )
     */


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

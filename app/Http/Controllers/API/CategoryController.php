<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Http\Request;

/**
 * @OA\Tag(
 *     name="Category",
 *     description="API Endpoints for Categories"
 * )
 *
 *
 * @OA\Schema(
 *     schema="Category",
 *     type="object",
 *     title="Categories",
 *     required={"name", "slug", "description", "image"},

 *     @OA\Property(property="name", type="string", description="Category name"),
 *     @OA\Property(property="slug", type="string", description="Unique slug for category"),
 *     @OA\Property(property="description", type="string", description="Category description"),
 *      @OA\Property(property="image", type="string", description="Category image"),
 * )
 */

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    //
    //Get Data API Categories
    /**
     * @OA\Get(
     *     path="/categories",
     *     tags={"Category"},
     *     summary="Show all Categories",
     *     description="Retrieve a list of all Categories.",
     *     @OA\Response(
     *         response=200,
     *         description="Successfully retrieved Categories",
     *         @OA\JsonContent(
     *             type="array",
     *             @OA\Items(ref="#/components/schemas/Category")
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
        $categories = Category::all();

        if (!empty($categories)) {
            return response()->json([
                'status' => 'success',
                'message' => 'Data Category',
                'data' => CategoryResource::collection($categories),
                'length' => count($categories)
            ], 200);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Data Category Not Found',
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
     *     path="/category/{slug}",
     *     tags={"Category"},
     *     summary="Show detail category by slug",
     *     description="Retrieve detail data category by slug.",
     *     @OA\Parameter(
     *         name="slug",
     *         in="path",
     *         required=true,
     *         description="Unique category slug",
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Data Category Detail",
     *         @OA\JsonContent(ref="#/components/schemas/Category")
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Category not found"
     *     )
     * )
     */
    public function show($slug)
    {
        //

        $category = Category::with('vendors')->where('slug', $slug)->first();
        $length = count($category->vendors);
        if (!empty($category)) {
            return response()->json([
                'status' => 'success',
                'message' => 'Data Category',
                'data' => new CategoryResource($category),
                'length' => $length
            ], 200);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Data Category Not Found',
                'data' => [],
                'length' => 0
            ], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
}

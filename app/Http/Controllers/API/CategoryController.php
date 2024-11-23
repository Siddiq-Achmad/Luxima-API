<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
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

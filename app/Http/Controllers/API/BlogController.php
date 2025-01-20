<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\BlogResource;

/**
 * @OA\Tag(
 *     name="Blog",
 *     description="API Endpoints for Blog"
 * )
 *

 *
 * @OA\Schema(
 *     schema="Blog",
 *     type="object",
 *     title="Blog",
 *     description="Blog model",
 *     required={"id", "title", "content", "created_at", "updated_at"},
 *     @OA\Property(property="id", type="integer", example=1),
 *     @OA\Property(property="title", type="string", example="Blog Title"),
 *     @OA\Property(property="content", type="string", example="Blog content here..."),
 *     @OA\Property(property="created_at", type="string", format="date-time", example="2024-09-03T12:34:56Z"),
 *     @OA\Property(property="updated_at", type="string", format="date-time", example="2024-09-03T12:34:56Z")
 * )
 *
 * @OA\Schema(
 *     schema="BlogCreateRequest",
 *     type="object",
 *     title="Blog Create Request",
 *     description="Request body for creating a blog",
 *     required={"title", "content"},
 *     @OA\Property(property="title", type="string", example="Blog Title"),
 *     @OA\Property(property="content", type="string", example="Blog content here...")
 * )
 *
 * @OA\Schema(
 *     schema="BlogUpdateRequest",
 *     type="object",
 *     title="Blog Update Request",
 *     description="Request body for updating a blog",
 *     required={"title", "content"},
 *     @OA\Property(property="title", type="string", example="Updated Blog Title"),
 *     @OA\Property(property="content", type="string", example="Updated blog content here...")
 * )
 */

class BlogController extends Controller
{
    //
    //List API Blog
    /**
     * @OA\Get(
     *     path="/blog",
     *     operationId="indexBlog",
     *     tags={"Blog"},
     *     summary="Get all Blog",
     *     description="Retrieve a list of all Blog.",
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation",
     *         @OA\JsonContent(
     *             type="array",
     *             @OA\Items(ref="#/components/schemas/Blog")
     *         )
     *     )
     * )
     */
    public function index(Request $request)
    {
        $limit = $request->query('limit', 12);
        $page = $request->query('page', 1);

        $blogs = Blog::query()
            ->orderBy('created_at', 'desc')
            ->paginate($limit, ['*'], 'page', $page);

        // $blog = Blog::with('author')->get();
        $length = count($blogs);

        if (!empty($blogs)) {
            return response()->json([
                'status' => 'success',
                'message' => 'Data Blog',
                'data' => BlogResource::collection($blogs),
                'length' => $length
            ], 200);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Blog not found',
            ], 404);
        }
    }

    //List Blog API - by Auth
    /**
     * @OA\Get(
     *     path="/list-blog",
     *     operationId="listBlogForAuthUser",
     *     tags={"Blog"},
     *     summary="Get Blog for authenticated user",
     *     description="Retrieve all blog posts for the currently authenticated user.",
     *     security={
     *         {"passport": {}}
     *     },
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation",
     *         @OA\JsonContent(
     *             type="array",
     *             @OA\Items(ref="#/components/schemas/Blog")
     *         )
     *     ),
     *     @OA\Response(
     *         response=401,
     *         description="Unauthorized"
     *     )
     * )
     */
    public function listBlog()
    {
        $Blog = Blog::where('user_id', Auth::user()->id)->get();
        $length = count($Blog);

        if (!empty($Blog)) {
            return response()->json([
                'status' => 'success',
                'message' => 'All Blog',
                'data' => BlogResource::collection($Blog),
                'length' => $length
            ], 200);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'No blog found',
            ], 404);
        }
    }

    //Get Single Blog API
    /**
     * @OA\Get(
     *     path="/blog-details/{blog_id}",
     *     operationId="getSingleBlogForAuthUser",
     *     tags={"Blog"},
     *     summary="Get a single blog for authenticated user",
     *     description="Retrieve the details of a specific blog post for the currently authenticated user.",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of the blog",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/Blog")
     *     ),
     *     @OA\Response(
     *         response=401,
     *         description="Unauthorized"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Blog not found"
     *     )
     * )
     */
    public function getSingleBlog($blog_id)
    {


        $blog = Blog::where('id', $blog_id, 'user_id', Auth::user()->id)->first();

        if (!empty($blog)) {
            return response()->json([
                'status' => 'success',
                'message' => 'Blog details',
                'data' => $blog,
            ], 200);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'No blog found',
            ], 404);
        }
    }

    //Get Blog by Slug
    /**
     * @OA\Get(
     *     path="/blog/{slug}",
     *     operationId="getBlogBySlug",
     *     tags={"Blog"},
     *     summary="Get blog by slug",
     *     description="Retrieve the details of a specific blog post by its slug.",
     *     @OA\Parameter(
     *         name="slug",
     *         in="path",
     *         description="Slug of the blog",
     *         required=true,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/Blog")
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Blog not found"
     *     )
     * )
     * 
     */
    public function getBlogBySlug($slug)
    {
        $blog = Blog::with('author')->where('slug', $slug)->first();

        if (!empty($blog)) {
            return response()->json([
                'status' => 'success',
                'message' => 'Blog details',
                'data' => new BlogResource($blog),
            ], 200);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'No blog found',
            ], 404);
        }
    }

    //Detail Blog API - by ID
    /**
     * @OA\Get(
     *     path="/Blog/{id}",
     *     operationId="showBlog",
     *     tags={"Blog"},
     *     summary="Get a blog by ID",
     *     description="Retrieve the details of a specific blog post.",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of the blog",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/Blog")
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Blog not found"
     *     )
     * )
     */
    public function show($id)
    {
        $blog = Blog::with('author')->find($id);

        if (!empty($blog)) {
            return response()->json([
                'status' => 'success',
                'message' => 'Blog details',
                'data' => new BlogResource($blog),
            ], 200);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'No blog found',
            ], 404);
        }
    }

    //Store API Blog
    /**
     * @OA\Post(
     *     path="/Blog",
     *     operationId="storeBlog",
     *     tags={"Blog"},
     *     summary="Create a new blog",
     *     security= {
     *         {"passport": {}}
     *     },
     *     description="Create a new blog post.",
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(ref="#/components/schemas/BlogCreateRequest")
     *     ),
     *     @OA\Response(
     *         response=201,
     *         description="Blog created successfully",
     *         @OA\JsonContent(ref="#/components/schemas/Blog")
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Bad request"
     *     )
     * )
     */

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'user_id' => 'required|exists:users,id',
        ]);

        //upload API image
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $image = basename($imagePath);
        }
        $blog = Blog::create([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $image,
            'user_id' => Auth::user()->id,
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Blog created successfully',
        ], 200);
    }

    //Update API Blog
    /**
     * @OA\Put(
     *     path="/blog/{id}",
     *     operationId="updateBlog",
     *     tags={"Blog"},
     *     summary="Update a blog",
     *     security= {
     *         {"passport": {}}
     *     },
     *     description="Update the details of a specific blog post.",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of the blog",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(ref="#/components/schemas/BlogUpdateRequest")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Blog updated successfully",
     *         @OA\JsonContent(ref="#/components/schemas/Blog")
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Bad request"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Blog not found"
     *     )
     * )
     */
    public function update(Request $request, $id)
    {
        $blog = Blog::find($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


        if (!empty($blog)) {
            //upload API image
            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('images', 'public');
                $image = basename($imagePath);
            }

            $blog->update([
                'title' => $request->title,
                'content' => $request->content,
                'image' => $image,
            ]);
            return response()->json([
                'status' => 'success',
                'message' => 'Blog updated successfully',
            ], 200);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'No blog found',
            ], 404);
        }
    }

    //Delete API Blog
    /**
     * @OA\Delete(
     *     path="/blog/{id}",
     *     operationId="destroyBlog",
     *     tags={"Blog"},
     *     summary="Delete a blog",
     *     security={
     *         {"passport": {}}
     *     },
     *     description="Delete a specific blog post.",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of the blog",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=204,
     *         description="Blog deleted successfully"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Blog not found"
     *     )
     * )
     */
    public function destroy($id)
    {
        $blog = Blog::find($id);

        if (!empty($blog)) {
            $blog->delete();
            return response()->json([
                'status' => 'success',
                'message' => 'Blog deleted successfully',
            ], 200);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'No blog found',
            ], 404);
        }
    }
}

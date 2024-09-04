<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Blogs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * @OA\Tag(
 *     name="Blogs",
 *     description="API Endpoints for Blogs"
 * )
 *
 *
 * @OA\SecurityScheme(
 *     securityScheme="bearerAuth",
 *     type="http",
 *     scheme="bearer",
 *     bearerFormat="JWT"
 * )
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
     *     path="/blogs",
     *     operationId="indexBlogs",
     *     tags={"Blogs"},
     *     summary="Get all blogs",
     *     description="Retrieve a list of all blogs.",
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
    public function index()
    {
        $blogs = Blogs::all();

        if(!empty($blogs)){
            return response()->json([
                'status' => 'success',
                'message' => 'All blogs',
                'data' => $blogs,
            ], 200);
        }
        else{
            return response()->json([
                'status' => 'error',
                'message' => 'No blog found',
            ], 404);
        }
    }

    //List Blog API - by Auth
    /**
     * @OA\Get(
     *     path="/list-blogs",
     *     operationId="listBlogsForAuthUser",
     *     tags={"Blogs"},
     *     summary="Get blogs for authenticated user",
     *     description="Retrieve all blog posts for the currently authenticated user.",
     *     security={{"bearerAuth":{}}},
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
    public function listBlogs()
    {
        $blogs = Blogs::where('user_id', Auth::user()->id)->get();

        if(!empty($blogs))
        {
            return response()->json([
                'status' => 'success',
                'message' => 'All blogs',
                'data' => $blogs,
            ], 200);
        }
        else{
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
     *     tags={"Blogs"},
     *     summary="Get a single blog for authenticated user",
     *     description="Retrieve the details of a specific blog post for the currently authenticated user.",
     *     security={{"bearerAuth":{}}},
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
        $blog = Blogs::where('id', $blog_id, 'user_id', Auth::user()->id)->first();

        if(!empty($blog))
        {
            return response()->json([
                'status' => 'success',
                'message' => 'Blog details',
                'data' => $blog,
            ], 200);
        }
        else
        {
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
     *     tags={"Blogs"},
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
        $blog = Blogs::where('slug', $slug)->first();

        if(!empty($blog))
        {
            return response()->json([
                'status' => 'success',
                'message' => 'Blog details',
                'data' => $blog,
            ], 200);
        }
        else
        {
            return response()->json([
                'status' => 'error',
                'message' => 'No blog found',
            ], 404);
        }
    }

    //Detail Blog API - by ID
    /**
     * @OA\Get(
     *     path="/blogs/{id}",
     *     operationId="showBlog",
     *     tags={"Blogs"},
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
        $blog = Blogs::find($id);

        if(!empty($blog))
        {
            return response()->json([
                'status' => 'success',
                'message' => 'Blog details',
                'data' => $blog,
            ], 200);
        }
        else
        {
            return response()->json([
                'status' => 'error',
                'message' => 'No blog found',
            ], 404);
        }
    }

    //Store API Blog
    /**
     * @OA\Post(
     *     path="/blogs",
     *     operationId="storeBlog",
     *     tags={"Blogs"},
     *     summary="Create a new blog",
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
        ]);

        //upload API image
        if($request->hasFile('image'))
        {
            $imagePath = $request->file('image')->store('images', 'public');
            $image = basename($imagePath);
        }
        $blog = Blogs::create([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $image,
            'user_id' => auth()->user()->id,
        ]);
        
        return response()->json([
            'status' => 'success',
            'message' => 'Blog created successfully',
        ], 200);
    }

    //Update API Blog
    /**
     * @OA\Put(
     *     path="/blogs/{id}",
     *     operationId="updateBlog",
     *     tags={"Blogs"},
     *     summary="Update a blog",
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
        $blog = Blogs::find($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


        if(!empty($blog))
        {
            //upload API image
            if($request->hasFile('image'))
            {
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
        }
        else
        {
            return response()->json([
                'status' => 'error',
                'message' => 'No blog found',
            ], 404);
        }
    }

    //Delete API Blog
   /**
     * @OA\Delete(
     *     path="/blogs/{id}",
     *     operationId="destroyBlog",
     *     tags={"Blogs"},
     *     summary="Delete a blog",
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
        $blog = Blogs::find($id);

        if(!empty($blog))
        {
            $blog->delete();
            return response()->json([
                'status' => 'success',
                'message' => 'Blog deleted successfully',
            ], 200);
        }
        else
        {
            return response()->json([
                'status' => 'error',
                'message' => 'No blog found',
            ], 404);
        }
    }

}

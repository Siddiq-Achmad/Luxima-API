<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\BlogResource;



class BlogController extends Controller
{

    public function index(Request $request)
    {
        // Jumlah item per halaman, default ke 10 jika tidak ada parameter `limit`
        $perPage = $request->input('limit', 12);

        // Query data dengan pagination
        $blogs = Blog::paginate($perPage);

        // $blog = Blog::with('author')->get();
        $length = count($blogs);

        if (!empty($blogs)) {
            return response()->json([
                'status' => 'success',
                'message' => 'Data Blog',
                'data' => BlogResource::collection($blogs),
                'length' => $length,
                'currentPage' => $blogs->currentPage(),
                'totalPages' => $blogs->lastPage(),
                'totalItems' => $blogs->total(),
                'perPage' => $blogs->perPage(),
            ], 200);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Blog not found',
            ], 404);
        }
    }


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

<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\CommentResource;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // Display a listing of comments for a specific blog
    public function index($blogId)
    {
        $comments = Comment::where('blog_id', $blogId)->latest()->get();
        return CommentResource::collection($comments);
    }

    // Store a new comment
    public function store(Request $request)
    {
        $validated = $request->validate([
            'blog_id' => 'required|exists:blogs,id',
            'content' => 'required|string|max:1000',
            'user_id' => 'nullable|exists:users,id',
        ]);

        $comment = Comment::create($validated);
        return new CommentResource($comment);
    }

    // Display a specific comment
    public function show(Comment $comment)
    {
        return new CommentResource($comment);
    }

    // Update an existing comment
    public function update(Request $request, Comment $comment)
    {
        $validated = $request->validate([
            'content' => 'required|string|max:1000',
        ]);

        $comment->update($validated);
        return new CommentResource($comment);
    }

    // Remove a comment
    public function destroy(Comment $comment)
    {
        $comment->delete();
        return response()->json(['message' => 'Comment deleted successfully.']);
    }
}

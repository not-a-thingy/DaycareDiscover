<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Comment;

class CommentsController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'parent_id' => 'required',
            'comment' => 'required',
        ]);

        $comment = new Comment([
            'parent_id' => $request->input('parent_id'),
            'comment' => $request->input('comment'),
        ]);

        $comment->save();

        return response()->json(['message' => 'Comment added successfully', 'comment' => $comment], 201);
    }

    public function index()
    {
        $comments = Comment::all();

        return response()->json(['comments' => $comments], 200);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Post::find();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $fields = $request->validate([
            'title' => 'required|max:255',
            'body' => 'required'
        ]);

        return $post;
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        return $post;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $fields = $request->validate([
            'title' => 'required|max:255',
            'body' => 'required'
        ]);

        $post->update($fields);

        return $post;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        $post->delete();
        return ['message' => "The post ($post->id) has been deleted"];
    }
}

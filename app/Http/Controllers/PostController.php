<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $post = Post::all();
        return view('_admin.post.index', compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
        $post = new Post
        return view('_admin.post.create', compact("post"));
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(PostRequest $request)
    {
        $fields = $request->validated();
        $post = new Post();
        $post->fill($fields);
        $post->save();
        return redirect()->route('admin.post.index')
            ->with('success', 'Post criado com sucesso');
    }

    /**
     * Display the specified resource.
     */

    public function show(Post $post)
    {
        return view('_admin.post.show', compact("post"));
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit(Post $post)
    {
        return view('_admin.post.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(PostRequest $request, Post $post)
    {
        $fields = $request->validated();
        $post->save();
        return redirect()->route('_admin.post.index')->with('success', 'Post atualizado com sucesso');
    }


    /**
     * Remove the specified resource from storage.
     */

    public function destroy(Post $post)
    {
        if ($post->projects()->exists()) {
            return redirect()->route('admin.post.index')->withErrors(
                ['delete' => 'O post que tentou eliminar tem projetos associados']
            );
        }
        $post->delete();
        return redirect()->route('admin.post.index')->with(
            'success',
            'Post eliminado com sucesso'
        );
    }
}
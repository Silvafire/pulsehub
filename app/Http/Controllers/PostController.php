<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\TipoPost;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\TipoPostRequest;
use Illuminate\Support\Facades\Storage;

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
        $post = new Post;
        $tipoPost = TipoPost::all();
        return view('_admin.post.create', compact("post","tipoPost"));
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(PostRequest $request)
    {
    $fields = $request->validated();
    $fields['tipo_post_id'] = $request->input('tipo_post_id');

    $post = new Post();
    $post->fill($fields);

    if ($request->hasFile('imagem')) {
        $imagem_path = $request->file('imagem')->store('public/post_imagens');
        $post->imagem = basename($imagem_path);
    }
    $post->user_id=Auth::user()->id;
    $post->save();
    return redirect()->route('admin.post.index')->with('success', 'Post criado com sucesso');
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
        $tipoPost = TipoPost::all();
        return view('_admin.post.edit', compact("post","tipoPost"));
    }

    /**
     * Update the specified resource in storage.
     */

     public function update(PostRequest $request, Post $post)
{
    $fields = $request->validated();
    $fields['tipo_post_id'] = $request->input('tipo_post_id');

    if ($request->hasFile('imagem')) {
        $imagem_path = $request->file('imagem')->store('public/post_imagens');
        $imagem = basename($imagem_path);

        // Verifica se a imagem atual é diferente da imagem enviada
        if ($post->imagem != $imagem) {
            // Atualiza a imagem
            $post->imagem = $imagem;
        }
    }

    $post->fill($fields);
    $post->save();

    return redirect()->route('admin.post.index')->with('success', 'Post atualizado com sucesso.');
}


     public function destroy(Post $post)
     {
         /*
         if ($post->projects()->exists()) {
             return redirect()->route('admin.post.index')->withErrors(['delete' => 'O post que tentou eliminar tem projetos associados']);
         }
         */

         $post->delete();
         return redirect()->route('admin.post.index')->with('success', 'Post eliminado com sucesso.');
     }

}

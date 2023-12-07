<?php

namespace App\Http\Controllers;

use App\Models\TipoPlano;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\PostUsersRequest;

class PostUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $postusers = PostUsers::all();
        return view('_admin.postusers.index', compact('postusers'));
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
        $postusers = new PostUsers;
        return view('_admin.postusers.create', compact("postusers"));
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(PostUsersRequest $request)
    {
        $fields = $request->validated();
        $postusers = new TipoPost();
        $postusers->fill($fields);
        $postusers->save();
        return redirect()->route('admin.postusers.index')
            ->with('success', 'Tipos de post criado com sucesso');
    }

    /**
     * Display the specified resource.
     */

    public function show(PostUsers $postusers)
    {
        return view('_admin.postusers.show', compact("postusers"));
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit(PostUsers $postusers)
    {
        return view('_admin.postusers.edit', compact('postusers'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(PostUsersRequest $request, PostUsers $postusers)
    {
        $fields = $request->validated();
        $postusers->save();
        return redirect()->route('_admin.postusers.index')->with('success', 'Post Users atualizado com sucesso');
    }


    /**
     * Remove the specified resource from storage.
     */

    public function destroy(PostUsers $postusers)
    {
        if ($postusers->projects()->exists()) {
            return redirect()->route('admin.postusers.index')->withErrors(
                ['delete' => 'Post Users que tentou eliminar tem projetos associados']
            );
        }
        $tipoplano->delete();
        return redirect()->route('admin.postusers.index')->with(
            'success',
            'Post Users eliminado com sucesso'
        );
    }
}

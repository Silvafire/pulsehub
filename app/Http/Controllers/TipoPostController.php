<?php

namespace App\Http\Controllers;

use App\Models\TipoPlano;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\TipoPostRequest;

class TipoPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $tipopost = TipoPost::all();
        return view('_admin.tipopost.index', compact('tipopost'));
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
        $tipopost = new TipoPost;
        return view('_admin.tipopost.create', compact("tipopost"));
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(TipoPostRequest $request)
    {
        $fields = $request->validated();
        $tipopost = new TipoPost();
        $tipopost->fill($fields);
        $tipopost->save();
        return redirect()->route('admin.tipopost.index')
            ->with('success', 'Tipos de post criado com sucesso');
    }

    /**
     * Display the specified resource.
     */

    public function show(TipoPost $tipopost)
    {
        return view('_admin.tipopost.show', compact("tippost"));
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit(TipoPost $tipopost)
    {
        return view('_admin.tipopost.edit', compact('tipopost'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(TipoPostRequest $request, TipoPost $tipopost)
    {
        $fields = $request->validated();
        $tipopost->save();
        return redirect()->route('_admin.tipopost.index')->with('success', 'Tipo de post atualizado com sucesso');
    }


    /**
     * Remove the specified resource from storage.
     */

    public function destroy(TipoPlano $tipoplano)
    {
        if ($tipoplano->projects()->exists()) {
            return redirect()->route('admin.tipopost.index')->withErrors(
                ['delete' => 'O tipo de post que tentou eliminar tem projetos associados']
            );
        }
        $tipoplano->delete();
        return redirect()->route('admin.tipopost.index')->with(
            'success',
            'post eliminado com sucesso'
        );
    }
}

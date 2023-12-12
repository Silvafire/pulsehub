<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Requests\Tipo_evento_modRequest;
use Illuminate\Support\Facades\Storage;
use App\Models\Tipo_eventos_mod;



class Tipo_evento_modController extends Controller
{
    /**tipo_eventos_mod
     * Display a listing of the resource.
     */

    public function index()
    {
        $tipo_eventos_mods = Tipo_eventos_mod::all();
        return view('_admin.tipo_eventos_mod.index', compact('tipo_eventos_mods'));
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
        $tipo_eventos_mod = new Tipo_eventos_mod;
        return view('_admin.tipo_eventos_mod.create', compact("tipo_eventos_mod"));
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Tipo_evento_modRequest $request)
    {
        $fields = $request->validated();
        $tipo_eventos_mod = new Tipo_eventos_mod();
        $tipo_eventos_mod->fill($fields);
        if ($request->hasFile('imagem')) {
            $imagem_path =
                $request->file('imagem')->store('public/tipo_modalidades');
            $tipo_eventos_mod->imagem = basename($imagem_path);
        }
        $tipo_eventos_mod->save();
        return redirect()->route('admin.tipo_eventos_mod.index')
            ->with('success', 'evento criado com sucesso');
    }

    /**
     * Display the specified resource.
     */



    public function show(Tipo_eventos_mod $tipo_eventos_mod)
    {
        return view('_admin.tipo_eventos_mod.show', compact('tipo_eventos_mod'));
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit(Tipo_eventos_mod $tipo_eventos_mod)
    {
        return view('_admin.tipo_eventos_mod.edit', compact('tipo_eventos_mod'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Tipo_evento_modRequest $request, Tipo_eventos_mod $tipo_eventos_mod)
    {
        $fields = $request->validated();
        $tipo_eventos_mod->fill($fields);
        if ($request->hasFile('imagem')) {
            if (!empty($tipo_eventos_mod->imagem)) {
                Storage::disk('public')->delete('tipo_modalidades/' .
                    $tipo_eventos_mod->imagem);
            }
            $imagem_path =
                $request->file('imagem')->store('public/tipo_modalidades');
            $tipo_eventos_mod->imagem = basename($imagem_path);
        }
        $tipo_eventos_mod->save();
        return redirect()->route('admin.tipo_eventos_mod.index')->with('success', 'tipo atualizado com sucesso');
    }


    /**
     * Remove the specified resource from storage.
     */

    public function destroy(Tipo_eventos_mod $tipo_eventos_mod)
    {
        $tipo_eventos_mod->delete();
        return redirect()->route('admin.tipo_eventos_mod.index')->with(
            'success',
            'tipo de evento/modalidade eliminado com sucesso'
        );
    }
}

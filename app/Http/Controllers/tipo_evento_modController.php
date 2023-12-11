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
        $tems = Tipo_eventos_mod::all();
        return view('_admin.tipo_eventos_mod.index', compact('tems'));
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
        $tem = new Tipo_eventos_mod;
        return view('_admin.tipo_eventos_mod.create', compact("tem"));
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Tipo_evento_modRequest $request)
    {
        $fields = $request->validated();
        $tem = new Tipo_eventos_mod();
        $tem->fill($fields);
        if ($request->hasFile('imagem')) {
            $imagem_path =
                $request->file('imagem')->store('public/tipo_modalidades');
            $tem->imagem = basename($imagem_path);
        }
        $tem->save();
        return redirect()->route('admin.tipo_eventos_mod.index')
            ->with('success', 'evento criado com sucesso');
    }

    /**
     * Display the specified resource.
     */

    public function show(Tipo_eventos_mod $tem)
    {
        return view('_admin.tipo_eventos_mod.show', compact("tem"));
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit(Tipo_eventos_mod $tem)
    {
        return view('_admin.tipo_eventos_mod.edit', compact('tem'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Tipo_evento_modRequest $request, Tipo_eventos_mod $tem)
    {
        $fields = $request->validated();
        $tem->fill($fields);
        if ($request->hasFile('imagem')) {
            if (!empty($tem->imagem)) {
                Storage::disk('public')->delete('tipo_modalidades/' .
                    $tem->imagem);
            }
            $imagem_path =
                $request->file('imagem')->store('public/tipo_modalidades');
            $tem->imagem = basename($imagem_path);
        }
        $tem->save();
        return redirect()->route('admin.tipo_eventos_mod.index')->with('success', 'tipo atualizado com sucesso');
    }


    /**
     * Remove the specified resource from storage.
     */

    public function destroy(Tipo_eventos_mod $tem)
    {
        $tem->delete();
        return redirect()->route('admin.tipo_eventos_mod.index')->with(
            'success',
            'tipo de evento/modalidade eliminado com sucesso'
        );
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\TipoPlano;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\TipoPlanosRequest;

class TiposPlanosController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $tiposplanos = TipoPlano::all();
        return view('_admin.tiposplanos.index', compact('tiposplanos'));
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
        $tipoplano = new TipoPlano;
        return view('_admin.tiposplanos.create', compact("tipoplano"));
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(TipoPlanosRequest $request)
    {
        $fields = $request->validated();
        $tipoplano = new TipoPlano();
        $tipoplano->fill($fields);
        if ($request->hasFile('imagem')) {
            $imagem_path =
                $request->file('imagem')->store('public/tipoplanos_imagens');
            $tipoplano->imagem = basename($imagem_path);
        }

        $tipoplano->save();
        return redirect()->route('admin.tiposplanos.index')
            ->with('success', 'tipos de planos criado com sucesso');
    }

    /**
     * Display the specified resource.
     */

    public function show(TipoPlano $tipoplano)
    {
        return view('_admin.tiposplanos.show', compact("tipoplano"));
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit(TipoPlano $tipoplano)
    {
        return view('_admin.tiposplanos.edit', compact('tipoplano'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(TipoPlanosRequest $request, TipoPlano $tipoplano)
    {
        $fields = $request->validated();
        $tipoplano->fill($fields);
        if ($request->hasFile('imagem')) {
            if (!empty($tipoplano->imagem)) {
                Storage::disk('public')->delete('tipoplanos_imagens/' .
                    $tipoplano->imagem);
            }
            $imagem_path =
                $request->file('imagem')->store('public/tipoplanos_imagens');
            $tipoplano->imagem = basename($imagem_path);
        }

        $tipoplano->save();
        return redirect()->route('_admin.tiposplanos.index')->with('success', 'Tipo de plano atualizado com sucesso');
    }


    /**
     * Remove the specified resource from storage.
     */

    public function destroy(TipoPlano $tipoplano)
    {
        if ($tipoplano->planos()->exists()) {
            return redirect()->route('admin.tiposplanos.index')->withErrors(
                ['delete' => 'O tipo de plano que tentou eliminar tem projetos associados']
            );
        }
        $tipoplano->delete();
        return redirect()->route('admin.tiposplanos.index')->with(
            'success',
            'tipo do plano eliminado com sucesso'
        );
    }
}

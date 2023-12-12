<?php

namespace App\Http\Controllers;

use App\Models\TiposPlano;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\TiposPlanoRequest;

class TiposPlanosController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $tiposplanos = TiposPlano::all();
        return view('_admin.tiposplanos.index', compact('tiposplanos'));
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
        $tiposplano = new TiposPlano;
        return view('_admin.tiposplanos.create', compact("tiposplano"));
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(TiposPlanoRequest $request)
    {
        $fields = $request->validated();
        $tiposplano = new tiposPlano();
        $tiposplano->fill($fields);
        if ($request->hasFile('imagem')) {
            $imagem_path =
                $request->file('imagem')->store('public/tiposplanos_imagens');
            $tiposplano->imagem = basename($imagem_path);
        }

        $tiposplano->save();
        return redirect()->route('admin.tiposplanos.index')
            ->with('success', 'tipos de planos criado com sucesso');
    }

    /**
     * Display the specified resource.
     */

    public function show(TiposPlano $tiposplano)
    {
        return view('_admin.tiposplanos.show', compact("tiposplano"));
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit(TiposPlano $tiposplano)
    {
        return view('_admin.tiposplanos.edit', compact('tiposplano'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(TiposPlanoRequest $request, TiposPlano $tiposplano)
    {
        $fields = $request->validated();
        $tiposplano->fill($fields);
        if ($request->hasFile('imagem')) {
            if (!empty($tiposplano->imagem)) {
                Storage::disk('public')->delete('tiposplanos_imagens/' .
                    $tiposplano->imagem);
            }
            $imagem_path =
                $request->file('imagem')->store('public/tiposplanos_imagens');
            $tiposplano->imagem = basename($imagem_path);
        }

        $tiposplano->save();
        return redirect()->route('admin.tiposplanos.index')->with('success', 'Tipo de plano atualizado com sucesso');
    }


    /**
     * Remove the specified resource from storage.
     */

    public function destroy(TiposPlano $tiposplano)
    {
       if ($tiposplano->planos()->exists()) {
            return redirect()->route('admin.tiposplanos.index')->withErrors(
                ['delete' => 'O tipo de plano que tentou eliminar tem projetos associados']
            );
        }
        $tiposplano->delete();
        return redirect()->route('admin.tiposplanos.index')->with(
            'success',
            'tipo do plano eliminado com sucesso'
        );
    }
}

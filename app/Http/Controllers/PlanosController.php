<?php

namespace App\Http\Controllers;

use App\Models\Plano;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\PlanosRequest;
use App\Models\Modalidade;
use App\Models\TiposPlano;

class PlanosController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $planos = Plano::all();
        return view('_admin.planos.index', compact('planos'));
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
        $plano = new Plano;
        $tipos = Modalidade::all();
        $tiposplanos = TiposPlano::all();
        return view('_admin.planos.create', compact("plano","tipos","tiposPlanos"));
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(PlanosRequest $request)
    {
        $fields = $request->validated();

        $fields['modalidade_id'] = $request->input('modalidade_id');
        $fields['tipo_plano_id'] = $request->input('tipo_plano_id');

        $plano = new Plano();
        $plano->fill($fields);
        $plano->save();
        return redirect()->route('admin.plano.index')
            ->with('success', 'plano criado com sucesso');
    }

    /**
     * Display the specified resource.
     */

    public function show(Plano $plano)
    {
        return view('_admin.planos.show', compact("plano"));
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit(Plano $plano)
    {
        $tipos = Modalidade::all();
        $tiposplanos = TiposPlano::all();
        return view('_admin.planos.edit', compact("plano","tipos","tiposPlanos"));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(PlanosRequest $request, Plano $plano)
    {
        $fields = $request->validated();

        $fields['tipo_plano_id'] = $request->input('tipo_plano_id');

        $plano->fill($fields);
        $plano->save();
        return redirect()->route('_admin.planos.index')->with('success', 'Plano atualizado com sucesso');
    }


    /**
     * Remove the specified resource from storage.
     */

    public function destroy(Plano $plano)
    {
        if ($plano->projects()->exists()) {
            return redirect()->route('admin.planos.index')->withErrors(
                ['delete' => 'O plano que tentou eliminar tem projetos associados']
            );
        }
        $plano->delete();
        return redirect()->route('admin.planos.index')->with(
            'success',
            'plano eliminado com sucesso'
        );
    }
}

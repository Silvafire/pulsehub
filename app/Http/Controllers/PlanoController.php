<?php

namespace App\Http\Controllers;

use App\Models\Plano;
use Illuminate\Http\Request;
use App\Http\Requests\PlanoRequest;

class PlanoController extends Controller
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
        return view('_admin.planos.create', compact("plano"));
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(PlanoRequest $request)
    {
        $fields = $request->validated();
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
        return view('_admin.planos.edit', compact('plano'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(PlanoRequest $request, Plano $plano)
    {
        $fields = $request->validated();
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
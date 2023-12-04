<?php

namespace App\Http\Controllers;

use App\Models\Modalidade;
use Illuminate\Http\Request;
use App\Http\Requests\ModalidadesRequest;

class ModalidadesController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $modalidades = Modalidade::all();
        return view('_admin.modalidades.index', compact('modalidades'));
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
        $modalidade = new Modalidade;
        return view('_admin.modalidades.create', compact("modalidade"));
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(ModalidadesRequest $request)
    {
        $fields = $request->validated();
        $modalidade = new Modalidade();
        $modalidade->fill($fields);
        $modalidade->save();
        return redirect()->route('admin.modalidades.index')
            ->with('success', 'modalidadeo criado com sucesso');
    }

    /**
     * Display the specified resource.
     */

    public function show(Modalidade $modalidade)
    {
        return view('_admin.modalidades.show', compact("modalidade"));
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit(Modalidade $modalidade)
    {
        return view('_admin.modalidades.edit', compact('modalidade'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(ModalidadesRequest $request, Modalidade $modalidade)
    {
        $fields = $request->validated();
        $modalidade->save();
        return redirect()->route('_admin.modalidades.index')->with('success', 'Modalidade atualizado com sucesso');
    }


    /**
     * Remove the specified resource from storage.
     */

    public function destroy(Modalidade $modalidade)
    {
        if ($modalidade->projects()->exists()) {
            return redirect()->route('admin.modalidades.index')->withErrors(
                ['delete' => 'A modalidade que tentou eliminar tem projetos associados']
            );
        }
        $modalidade->delete();
        return redirect()->route('admin.modalidades.index')->with(
            'success',
            'Modalidade eliminado com sucesso'
        );
    }
}

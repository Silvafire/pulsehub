<?php

namespace App\Http\Controllers;

use App\Models\Modalidade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ModalidadesRequest;
use App\Models\Tipo_eventos_mod;

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
        $tipos = Tipo_eventos_mod::all();
        return view('_admin.modalidades.create', compact("modalidade","tipos"));
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(ModalidadesRequest $request)
    {
        $fields = $request->validated();
        $modalidade = new Modalidade();
        $modalidade->fill($fields);
        if ($request->hasFile('imagem')) {
            $imagem_path =
                $request->file('imagem')->store('public/modalidades_imagens');
            $modalidade->imagem = basename($imagem_path);
        }
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
        $tipos = Tipo_eventos_mod::all();
        return view('_admin.modalidades.edit', compact('modalidade','tipos'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(ModalidadesRequest $request, Modalidade $modalidade)
    {
        $fields = $request->validated();
        $modalidade->fill($fields);
        if ($request->hasFile('imagem')) {
            if (!empty($modalidade->imagem)) {
                Storage::disk('public')->delete('modalidades_imagens/' .
                    $modalidade->imagem);
            }
            $imagem_path =
                $request->file('imagem')->store('public/modalidades_imagens');
            $modalidade->imagem = basename($imagem_path);
        }
        $modalidade->save();
        return redirect()->route('admin.modalidades.index')->with('success', 'Modalidade atualizado com sucesso');
    }


    /**
     * Remove the specified resource from storage.
     */

    public function destroy(Modalidade $modalidade)
    {
        $modalidade->delete();
        return redirect()->route('admin.modalidades.index')->with(
            'success',
            'Modalidade eliminado com sucesso'
        );
    }
}


<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;
use App\Http\Requests\ServicesRequest;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Services::all();
        return view('_admin.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $services = new Services;
        return view('_admin.services.create', compact('services'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ServicesRequest $request)
    {
        $fields = $request->validated();
        $services = new Services();
        $services->fill($fields);
        $services->save();
        return redirect()->route('admin.services.index')
            ->with('success', 'Serviço criado com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(Services $services) // front end
    {
        return view('_admin.services.show', compact('services'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Services $services)
    {
        return view('_admin.services.edit', compact('services'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ServicesRequest $request, Services $services)
    {
        $fields = $request->validated();
        $services->fill($fields);
        $services->save();
        return redirect()->route('admin.categories.index')->with('success', 'Categoria atualizada com sucesso');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Services $services)
    {

        if ($services->projects()->exists()) {
            return redirect()->route('admin.services.index')->withErrors(
                ['delete' => 'O serviço que tentou eliminar tem projetos associados']
            );
        }
        $services->delete();
        return redirect()->route('admin.services.index')->with(
            'success',
            'Serviço eliminada com sucesso'
        );
    }
}

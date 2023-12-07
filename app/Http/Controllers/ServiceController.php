<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Requests\ServicesRequest;
use Illuminate\Support\Facades\Storage;



class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $service = Service::all();
        return view('_admin.services.index', compact('service'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $service = new Service;
        return view('_admin.services.create', compact('service'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ServicesRequest $request)
    {
        $fields = $request->validated();

        $service = new Service();

        $service->fill($fields);
        $service->save();
        return redirect()->route('admin.services.index')
            ->with('success', 'Serviço criado com sucesso');
    }

    /**
     * Display the specified resource.
     */

     public function show($id) 
     {
         $service = Service::find($id);
         if ($service) {
             return view('_admin.services.show', compact('service'));
         } else {
             // Handle the case where the service with the given ID is not found
             return redirect()->route('admin.services.index'); // Redirect to a suitable page or show an error
         }
     }
     
 
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {

        return view('_admin.services.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ServicesRequest $request, Service $service)
    {
        $fields = $request->validated();
        $service->fill($fields);
        $service->save();
        return redirect()->route('admin.services.index')
        ->with('success', 'Serviço atualizado com sucesso');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        Storage::disk('public')->delete('image_services/' .
        $service->imagem);
       
        $service->delete();
        return redirect()->route('admin.services.index')
        ->with('success','Serviço eliminado com sucesso');
    }
}

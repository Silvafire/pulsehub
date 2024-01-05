<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Requests\ServicesRequest;
use Illuminate\Support\Facades\Storage;

use App\Models\ImageService;
use App\Http\Requests\ImageServiceRequest;

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

     public function show(Service $service) 
     {
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

    /////////////////////////////////////////////////
    //////////////// IMAGENS ////////////////////////

    public function images_index(Service $service) {
        return view('_admin.services.images.index', compact('service'));
    }

    /**
     * Show the form for creating a new resource.
     */

    public function images_create(Service $service)
    {
        $imageService = new ImageService;
        return view('_admin.services.images.create', compact('service', 'imageService'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function images_store(ImageServiceRequest $request, Service $service)
    {
        $fields = $request->validated();
 
        $imageService = new ImageService();
        $imageService->imagem_id=$service->id;
        if ($request->hasFile('imagem')) {
            $imagem_path = $request->file('imagem')->store('public/image_services');
            $imageService->imagem = basename($imagem_path);
        }
        $imageService->save();
        return redirect()->route('admin.services.images.index', $service)
            ->with('success', 'Imagem criada com sucesso');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function images_edit(Service $service, ImageService $imageService)
    {
        return view('_admin.services.images.edit', compact('imageService', 'service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function images_update(ImageServiceRequest $request, Service $service, ImageService $imageService)
    {
        $fields = $request->validated();
        if ($request->hasFile('imagem')) {
            Storage::disk('public')->delete('image_services/' . $imageService->imagem);
            $imagem_path = $request->file('imagem')->store('public/image_services');
            $imageService->imagem = basename($imagem_path);
        }
        $imageService->save();
        
        return redirect()->route('admin.services.images.index', $service)
        ->with('success', 'Imagem atualizada com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function images_destroy(Service $service, ImageService $imageService)
    {
        Storage::disk('public')->delete('image_services/' . $imageService->imagem);
        $imageService->delete();

        return redirect()->route('admin.services.images.index', $service)
        ->with('success','Imagem eliminada com sucesso');
    }
}

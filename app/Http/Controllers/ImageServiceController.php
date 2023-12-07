<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\ImageService;
use Illuminate\Http\Request;
use App\Http\Requests\ImageServiceRequest;

class ImageServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Service $service)
    {
        $imagesservices=$service->imagens;
        return view('_admin.imageServices.index', compact('service','imagesservices'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Service $service)
    {
        $imageService = new ImageService;
        return view('_admin.imageServices.create', compact('service','imageService'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ImageServiceRequest $request,Service $service)
    {
        $fields = $request->validated();
 
        $imageService = new ImageService();
        $imageService->service_id=$service->id;
        if ($request->hasFile('imagem')) {
            $imagem_path = $request->file('imagem')->store(
                'public/image_services');
            $imageService->imagem = basename($imagem_path);
        }
        $imageService->save();
        return redirect()->route('admin.imageServices.index',$service)
            ->with('success', 'Imagem criada com sucesso');
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service,ImageService $imageService)
    {
        return view('_admin.imageServices.edit', compact('imageService','service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ImageServiceRequest $request, Service $service, ImageService $imageService)
    {
        $fields = $request->validated();
        if ($request->hasFile('imagem')) {
            if (!empty($user->imagem)) {
                Storage::disk('public')->delete('image_services/' .
                    $user->imagem);
            }
            $imagem_path =
            $request->file('imagem')->store('public/image_services');
            $imageService->imagem = basename($imagem_path);
        }

        $imageService->save();
        return redirect()->route('admin.imageServices.index',$service)
        ->with('success', 'Imagem atualizada com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service, ImageService $imageService)
    {
        Storage::disk('public')->delete('image_services/' .
        $imageService->imagem);

        $imageService->delete();
        return redirect()->route('admin.imageServices.index',$service)
        ->with('success','Imagem eliminada com sucesso');
    }
}

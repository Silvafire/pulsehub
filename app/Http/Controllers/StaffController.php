<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;
use App\Http\Requests\StaffRequest;

class StaffController extends Controller
{
    //

    public function index()
    {
        $staffs = Staff::all();
        return view('_admin.staffs.index', compact('staffs'));
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
        $staff = new Staff;
        return view('_admin.staffs.create', compact("staff"));
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(StaffRequest $request)
    {

        $fields = $request->validated();
        $staff = new Staff();
        $staff->fill($fields);
        if ($request->hasFile('img')) {
            $imagem_path =
                $request->file('img')->store('public/staff_imagens');
            $staff->img = basename($imagem_path);
        }
        $staff->save();
        return redirect()->route('admin.staffs.index')
            ->with('success', 'Staff criado com sucesso');
    }

    /**
     * Display the specified resource.
     */

    public function show(Staff $staff)
    {
        return view('_admin.staffs.show', compact("staff"));
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit(Staff $staff)
    {
        return view('_admin.staffs.edit', compact('staff'));
    }

    /**
     * Update the specified resource in storage.
     */

     public function update(StaffRequest $request, Staff $staff)
     {
         $fields = $request->validated();
     
         // Verifica se o campo 'img' foi alterado
         if ($request->hasFile('img')) {
             if (!empty($staff->img)) {
                 Storage::disk('public')->delete('staff_imagens/' . $staff->img);
             }
     
             $imagem_path = $request->file('img')->store('public/staff_imagens');
             $fields['img'] = basename($imagem_path);
         }
     
         // Verifica se outros campos foram alterados e os atualiza
         foreach ($fields as $key => $value) {
             if ($staff->$key != $value) {
                 $staff->$key = $value;
             }
         }
     
         $staff->save();
         return redirect()->route('admin.staffs.index')->with('success', 'Staff atualizado com sucesso');
     }
     

    /**
     * Remove the specified resource from storage.
     */

    public function destroy(Staff $staff)
    {
       /*  if ($staff->projects()->exists()) {
            return redirect()->route('admin.staffs.index')->withErrors(
                ['delete' => 'O Staff que tentou eliminar tem projetos associados']
            );
        } */
        $staff->delete();
        return redirect()->route('admin.staffs.index')->with(
            'success',
            'Staff eliminado com sucesso'
        );
    }
}

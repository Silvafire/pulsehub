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
        if ($request->hasFile('imagem')) {
            $imagem_path =
                $request->file('imagem')->store('public/staff_imagens');
            $staff->imagem = basename($imagem_path);
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

    public function edit(Staff $staffs)
    {
        return view('_admin.staffs.edit', compact('staffs'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(StaffRequest $request, Staff $staff)
    {
        $fields = $request->validated();
        if ($request->hasFile('imagem')) {
            if (!empty($staff->imagem)) {
                Storage::disk('public')->delete('staff_imagens/' .
                    $staff->imagem);
            }
            $imagem_path =
                $request->file('imagem')->store('public/staff_imagens');
            $staff->imagem = basename($imagem_path);
        }
        $staff->save();
        return redirect()->route('_admin.staffs.index')->with('success', 'Sttaf atualizado com sucesso');
    }


    /**
     * Remove the specified resource from storage.
     */

    public function destroy(Staff $staff)
    {
        if ($staff->projects()->exists()) {
            return redirect()->route('admin.staffs.index')->withErrors(
                ['delete' => 'O Staff que tentou eliminar tem projetos associados']
            );
        }
        $staff->delete();
        return redirect()->route('admin.staffs.index')->with(
            'success',
            'Staff eliminado com sucesso'
        );
    }
}

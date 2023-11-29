<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('_admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = new user;
        return view('_admin.users.create', compact("user"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
{
    // Validação do request e obtenção dos campos validados
    $fields = $request->validated();

    // Verifica se a chave 'password' existe no array $fields antes de acessá-la
    if (isset($fields['password'])) {
        // Cria uma nova instância do modelo User
        $user = new User();

        // Preenche os campos do usuário com os dados validados
        $user->fill($fields);

        // Hash da senha antes de armazená-la no banco de dados
        $user->password = Hash::make($fields['password']);

        // Define a foto do usuário como null (possivelmente para um campo de foto opcional)
        $user->photo = null;

        // Salva o usuário no banco de dados
        $user->save();

        // Redireciona para a rota 'admin.users.index' após o armazenamento bem-sucedido
        // e define uma mensagem de sucesso para exibir
        return redirect()->route('admin.users.index')->with('success', 'Utilizador criado com sucesso');
    } else {
        // Caso a chave 'password' não esteja presente nos campos validados
        // Lidar com o erro ou tomar outra ação adequada
        // Por exemplo, redirecionar de volta ao formulário com uma mensagem de erro
        return redirect()->back()->withInput()->withErrors(['password' => 'Campo de senha ausente']);
    }
}

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('_admin.users.show', compact("user"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('_admin.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserRequest $request, User $user)
    {
        $fields = $request->validated();
        $user->fill($fields);
        $user->save();
        return redirect()->route('admin.users.index')->with('success', 'User atualizada com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        if ($user->projects()->exists()) {
            return redirect()->route('admin.users.index')->withErrors(
                ['delete' => 'O User que tentou eliminar tem projetos associados']
            );
        }
        $user->delete();
        return redirect()->route('admin.users.index')->with(
            'success',
            'User eliminada com sucesso'
        );
    }
}
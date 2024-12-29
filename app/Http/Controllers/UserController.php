<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // Função responsável por listar todos os usuários
    public function index()
    {
        // Recupera todos os usuários do banco de dados
        $users = User::all();
        // Retorna a lista de usuários em formato JSON
        return response()->json(['users' => $users]);
    }

    // Função responsável por criar um novo usuário
    public function store(Request $request)
    {
        // Valida os dados recebidos na requisição
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users|max:255',
            'password' => 'required|string|min:8|max:255',
        ]);

        // Cria uma nova instância do modelo User
        $user = new User();
        // Preenche os dados do usuário com as informações recebidas
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));

        // Salva o usuário no banco de dados
        $user->save();

        // Retorna o usuário recém-criado com uma mensagem de sucesso
        return response()->json(['user' => $user, 'message' => 'Usuário criado com sucesso!']);
    }

    // Função responsável por exibir os dados de um usuário específico
    public function show($id)
    {
        // Recupera o usuário com o ID especificado ou retorna erro 404 se não encontrado
        $user = User::findOrFail($id);

        // Retorna os dados do usuário encontrado em formato JSON
        return response()->json(['user' => $user]);
    }

    // Função responsável por atualizar os dados de um usuário existente
    public function update(Request $request, $id)
    {
        // Valida os dados recebidos na requisição
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,'.$id,
        ]);

        // Recupera o usuário com o ID especificado ou retorna erro 404 se não encontrado
        $user = User::findOrFail($id);
        // Atualiza o usuário com os novos dados recebidos
        $user->update($request->all());

        // Retorna o usuário atualizado com uma mensagem de sucesso
        return response()->json(['user' => $user, 'message' => 'Usuário atualizado com sucesso!']);
    }

    // Função responsável por deletar um usuário
    public function destroy($id)
    {
        // Recupera o usuário com o ID especificado ou retorna erro 404 se não encontrado
        $user = User::findOrFail($id);
        // Deleta o usuário do banco de dados
        $user->delete();

        // Retorna uma mensagem de sucesso informando que o usuário foi deletado
        return response()->json(['message' => 'Usuário deletado com sucesso!']);
    }
}
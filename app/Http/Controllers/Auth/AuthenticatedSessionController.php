<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthenticatedSessionController extends Controller
{
    // Função responsável por autenticar o usuário e gerar um token
    public function store(Request $request)
    {
        // Valida os dados recebidos na requisição
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Tenta autenticar o usuário com as credenciais fornecidas
        if (Auth::attempt($request->only('email', 'password'))) {
            // Se a autenticação for bem-sucedida, recupera o usuário autenticado
            $user = Auth::user();
            // Cria um token de acesso para o usuário autenticado
            $token = $user->createToken('token-name')->plainTextToken;

            // Retorna o token e o ID do usuário como resposta em formato JSON
            return response()->json([
                'token' => $token,
                'user_id' => $user->id
            ], 200);
        }

        // Se as credenciais estiverem incorretas, lança uma exceção de validação
        throw ValidationException::withMessages([
            'email' => ['The provided credentials are incorrect.'],
        ]);
    }

     // Função responsável por desconectar o usuário (logout)
    public function destroy(Request $request)
    {
        // Deleta o token de acesso atual do usuário (fazendo o logout)
        $request->user()->currentAccessToken()->delete();

        // Retorna uma mensagem de sucesso após o logout
        return response()->json(['message' => 'Logged out'], 200);
    }
}
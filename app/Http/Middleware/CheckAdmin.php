<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CheckAdmin
{
    public function handle(Request $request, Closure $next)
    {
        // Verifica se o usuário está autenticado e se o campo 'adm' é 1
        if (Auth::check() && Auth::user()->adm == 1) {
            return $next($request);
        }

        // Caso contrário, retorna um erro 403 (Forbidden)
        return response()->json(['message' => 'Access denied.'], 403);
    }
}
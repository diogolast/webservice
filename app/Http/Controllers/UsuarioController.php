<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuario = User::all();

        return response()->json($usuario);
    }

    public function store(Request $request)
    {
        $usuario = new User();

        $usuario->name = $request->name;
        $usuario->email = $request->email;
        $usuario->password = $request->password;
        $usuario->dt_nascimento = $request->dt_nascimento;

        $usuario->save();

        return response()->json(['status' => 'Usuário criado'], 201);
    }

    public function show($id)
    {
        $usuario = User::findOrFail($id);

        return response()->json($usuario);
    }
}

<?php

namespace App\Http\Controllers;

use App\Mensagem;
use App\User;
use Illuminate\Http\Request;

class MensagemController extends Controller
{
    public function index()
    {
        $mensagens = Mensagem::all();

        return response()->json($mensagens);
    }

    public function store(Request $request, $id)
    {
        $mensagem = new Mensagem(['post' => $request->post]);
        $usuario = User::find($id);
        $usuario->posts()->save($mensagem);

        return response()->json(['status' => 'Mensagem criada'], 201);
    }

    public function getMensagem($id)
    {
        $usuario = User::find($id)->posts;

        return response()->json($usuario);
    }

    public function getHashtag($hashtag)
    {
        $mensagem = Mensagem::where('post', 'like', "#$hashtag%")->get();

        return response()->json($mensagem);
    }
}

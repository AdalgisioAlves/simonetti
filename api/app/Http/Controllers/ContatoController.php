<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use App\Contatos;
use Illuminate\Http\Request;
class ContatoController extends BaseController
{
    //
    public function allContatos()
    {
        $Contatos = Contatos::all();

        return response()->json($Contatos);
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'nome' => 'required',
            'email' => 'required|email',
            'telefone'=>'required',
            'texto'=>'required',
        ]);

        $Contatos = Contatos::create($request->all());

        return response()->json($Contatos, 201);
    }

}

<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use App\Autores;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
class AutorController extends BaseController
{
    //
    public function allAutores()
    {
        $autores = Autores::all();

        return response()->json($autores);
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'nome' => 'required',
            'email' => 'required|email',
        ]);

        $author = Autores::create($request->all());

        return response()->json($author, 201);
    }

}

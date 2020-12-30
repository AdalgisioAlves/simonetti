<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use App\Posts;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
class PostController extends BaseController
{
    //
    public function allPosts()
    {
        $posts =  DB::table('posts')
        ->join('autores', 'posts.id_autor', '=', 'autores.id')
        ->select('posts.*','autores.nome as autor')
        ->get();

        return response()->json($posts);
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'titulo' => 'required',
            'texto' => 'required',
            'id_autor' => 'required'
        ]);

        $Posts = Posts::create($request->all());

        return response()->json($Posts, 201);
    }

    public function update($id, Request $request)
    {
        $Posts = Posts::findOrFail($id);
        $Posts->update($request->all());

        return response()->json($Posts, 200);
    }

}

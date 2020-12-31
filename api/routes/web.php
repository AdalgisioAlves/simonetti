<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});


/*   ROTAS PRA SERVIÇO DO POST */

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('posts',  ['uses' => 'PostController@allPosts']);
  
    $router->get('posts/{id}', ['uses' => 'PostController@onePost']);
  
    $router->post('posts', ['uses' => 'PostController@create']);
  
    $router->delete('posts/{id}', ['uses' => 'PostController@delete']);
  
    $router->put('posts/{id}', ['uses' => 'PostController@update']);
  });

  /*   ROTAS PRA SERVIÇO DO Autores */

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('autores',  ['uses' => 'AutorController@allAutores']);
  
    $router->get('autores/{id}', ['uses' => 'AutorController@oneAutor']);
  
    $router->post('autores', ['uses' => 'AutorController@create']);
  
    $router->delete('autores/{id}', ['uses' => 'AutorController@delete']);
  
    $router->put('autores/{id}', ['uses' => 'AutorController@update']);
  });
  
$router->group(['prefix' => 'api'], function () use ($router) {
  $router->get('contatos',  ['uses' => 'ContatoController@allContatos']);

  $router->get('contatos/{id}', ['uses' => 'ContatoController@oneCotato']);

  $router->post('contatos', ['uses' => 'ContatoController@create']);

  $router->delete('contatos/{id}', ['uses' => 'ContatoController@delete']);

  $router->put('contatos/{id}', ['uses' => 'AutorController@update']);
});
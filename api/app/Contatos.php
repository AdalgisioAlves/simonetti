<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contatos extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'conato_usuarios';
    protected $fillable = [
        'nome', 'email','telefone','texto'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
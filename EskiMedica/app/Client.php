<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['nome', 'sobrenome', 'email', 'cliente', 'mensagem'];
}


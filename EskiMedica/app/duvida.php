<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class duvida extends Model
{
    protected $fillable = ['nome', 'sobrenome', 'email', 'cliente', 'mensagem'];
}

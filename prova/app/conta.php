<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class conta extends Model
{
    protected $fillable = ['nome','cpf','data','conta','saldo'];
}


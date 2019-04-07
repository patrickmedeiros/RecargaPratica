<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = array('nome','sobrenome','cpf','rg','dataNascimento','endereco','email','numeroCartao','senha');

    public $timestamps = false;
}

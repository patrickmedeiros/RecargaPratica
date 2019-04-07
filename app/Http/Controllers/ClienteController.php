<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class ClienteController extends Controller
{
    public function index(){
        $dados = Cliente::all();

        return view('clientes_lista',['clientes' => $dados]);
    }
}

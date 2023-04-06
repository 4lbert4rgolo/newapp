<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarrinhoController extends Controller
{
        
    public function carrinhoLista() {
        $itens = \Cart::content();
        dd($itens);
    }
}

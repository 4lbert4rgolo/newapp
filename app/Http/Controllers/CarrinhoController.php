<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class CarrinhoController extends Controller
{
        
    public function carrinhoLista() {
        $itens = \Cart::content();
        return view('site.carrinho', compact('itens'));
    }

    public function adicionaCarrinho(Request $request) {
        $request->validate([
            'name' => 'required|min:2'
        ]);
    
        \Cart::add([
            'id' => $request->id,
            'nome' => $request->name,
            'price' => $request->price,
            'quantity' => $request->qnt,
            'attributes' => array(
                'image' => $request->img
            )
        ]);
    
        return redirect()->route('site.carrinho')->with('success_message', 'Produto adicionado ao carrinho!');
    }
    
}
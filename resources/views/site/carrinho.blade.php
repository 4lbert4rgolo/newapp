@extends('site.layout')
@section('title', 'Carrinho')
@section('conteudo')
    
<div class="row container">

    <h5>Seu carrinho possui {{ $itens->count() }} produtos. </h5>
    <table class="stripped">
    <thead>
      <tr>
          <th></th>
          <th>Nome</th>
          <th>Preço</th>
          <th>Quantidade</th>
          <th></th>
      </tr>
    </thead>

    <tbody>
        @foreach ($itens as $item)
        <tr>
            <td><img src="{{$item->attributes->image}}" alt="" width="70" class="responsive-img circle"></td>
            <td>{{$item->name}}</td>
            <td>{{$item->price}}</td>
            <td><input type="number" name="quantity" value="{{$item->quantity}}"></td>
            <td>
                <button class="btn-floating waves-effect waves-light blue"><i class="material-icons">refresh</i></button>
                <button class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">delete</i></a>
            </td>
        </tr>
        @endforeach

    
        </tbody>    
  </table>    

  <div class="row container center">
    <button class="btn-large waves-effect waves-light blue">Continuar comprando<i class="material-icons right">arrow_back</i></button>
    <button class="btn-large waves-effect waves-light blue">Limpar carrinho<i class="material-icons right">clear</i></button>  
    <button class="btn-large waves-effect waves-light green">Finalizar pedido<i class="material-icons right">check</i></button> 
  </div>
      
</div>
  

  

@endsection
@extends('layouts.app')
@section('content')
  <div class="row">
    <div class="col-10">
      <table class="table table-striped table table-bordered">
        <thead class="thead-dark">
          <tr>
              <th>Nome</th>
              <th>Unidade</th>
              <th>Preço R$</th>
              <th>Quantidade</th>
              <th colspan="100%">Ações</th>
          </tr>
        </thead>
        <tbody>
           @foreach($produtos as $produto)
          <tr>
            <td>{{$produto->nome}}</td>
            <td>{{$produto->unidade}}</td>
            <td>{{$produto->preco}}</td>
            <td>{{$produto->quantidade}}</td>
            <td>
              <a class="btn btn-warning" href="{{route('produtos.edit', $produto->id)}}">Editar</a>
            </td>
            <td>
              <form action="{{route('produtos.destroy', $produto->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">DELETAR</button>
              </form>
            </td>
          </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{route('produtos.create')}}" class="btn btn-success">Novo Produto</a>
    
  </div>
</div>
@endsection

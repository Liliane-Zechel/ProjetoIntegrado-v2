@extends('layouts.app')
@section('title', 'Produtos')
@section('content')
<!--div class="row mb-4">
    <div class="col-12">
        <a class="btn btn-success" href="">Exportar Para CSV</a>
    </div>
</div>-->

<div class="col-12">
    <div class="col-12">
        <div class="card">
            <div class="card-header bg-success text-white">
                Exportação
            </div>
            <div class="card-body">
                <form action="{{ route('produtos.export') }}" method="POST">
                    @csrf
                    <div class="row align-items-end">
                        <div class="col- 12 sm-3">
                            <label>Data Inicial</label>
                            <imput type="text" name="date_start" class="form-control">
                        </div>
                        <div class="d-flex align-items-end">
                            <div class="col-6 ">
                                <label>Data Final</label>
                                <imput type="text" name="date_end" class="form-control">
                            </div>

                            <div class="col-6 ">
                                <div class="d-flex align-items-end">
                                    <label>Tipo de Arquivo de Exportação</label>
                                    <select class="form-control" name="export_file_type">
                                        <option value="csv">CSV</option>
                                        <option value="xls">XLS</option>
                                    </select>
                                </div>

                                <div class="d-flex align-items-end">
                                    <div class="col-12 mt-5">
                                        <button type="submit" class="btn btn-success">Exportar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                </form>
            </div>
        </div>
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

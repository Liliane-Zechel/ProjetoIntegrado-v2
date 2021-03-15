@extends('layouts.app')
@section('title', 'Clientes')
@section('content')
<div class="col-12">
    <div class="card">
        <div class="card-header bg-success text-white">
            Clientes
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12 text-right">
                    <a href="{{route('customers.create')}}" class="btn btn-success">Novo Cliente</a>
                </div>

                <div class="col-12 mt-4">
                    <table class="table table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th>Nome</th>
                                <th>E-mail</th>
                                <th>Data de Nascimento</th>
                                <th>Data de Cadastro</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($customers as $customer)
                            <tr>
                                <td>{{$customer->name}}</td>
                                <td>{{$customer->email}}</td>
                                <td>{{$customer->data_de_nascimento}}</td>
                                <td>{{$customer->created_at->format('d/m/Y')}}</td>
                                <td><a class="btn btn-warning" href="{{route('customers.edit', $customer->id)}}">Editar</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')
@section('content')
  <div class="card">
    <div class="card-header">
        Usuários
    </div>
        <div class="card-body">
            <div class="row">
                <div class="col-10 text-right">
                    <a href="{{route('users.create')}}" class="btn btn-success">Novo Usuário</a>
                </div>

                <div class="col-10 mt-4">
                    <table class="table table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th>Nome</th>
                                <th>E-mail</th>
                                <th>Nível</th>
                                <th>Data de Cadastro</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $users)
                            <tr>
                                <td>{{$users->name}}</td>
                                <td>{{$users->email}}</td>
                                <td>{{$users->role}}</td>
                                <td>{{$users->created_at->format('d/m/Y')}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table> 
                </div>  
            </div>
        </div>
    </div>
@endsection

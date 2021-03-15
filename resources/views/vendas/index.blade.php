@extends('layouts.app')
@section('title', ' Vendas')
@section('content')
<div class="col-12">
    <div class="card">
        <div class="card-header big-success text-white">
            Saída de Estoque
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12 text-rigth">
                    <a href="{{ route('vendas.create') }}" class="btn btn-success">Nova Venda</a>
                </div>
                <div class="col-12 mt-4">
                    <table class="table table-hover">
                        <thead class="thead-dark">
                            <tr>

                                <th>Cliente</th>
                                <th>-</th>
                                <th>Vendedor</th>
                                <th>Data da Venda</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($vendas as $venda)
                            <tr>

                                <td>{{ $venda->customer->name }}</td>
                                <td>{{ implode(',', $venda->produtos->pluck('name')->toArray()) }}</td>
                                <td>{{ $venda->user->name }}</td>
                                <td>{{ $venda->created_at->format('d/m/Y') }}</td>


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

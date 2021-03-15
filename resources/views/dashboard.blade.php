@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')

    <div class="col-12">

        <div class="row">
            <div class="card-body">
                <div class="col-12 col-md-6">
                    <div class="card bg-success text-white mb-4">
                        <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                Produtos Cadastrados
                                <span class="h1">{{ $counts['produtos'] }}</span>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{ route('produtos.store') }}">
                            Visualizar Produtos
                            </a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="card bg-success text-white mb-4">
                        <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    Usuários Cadastrados
                                    <span class="h1">{{ $counts['users'] }}</span>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{ route('users.store') }}">
                            Ver Usuários
                            </a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="card bg-success text-white mb-4">
                        <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                            Clientes  Cadastrados
                            <span class="h1">{{ $counts['customers'] }}</span>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{ route('customers.store') }}">
                             Ver Clientes
                            </a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="card bg-success text-white mb-4">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                Vendas Realizadas
                                <span class="h1">{{ $counts['vendas'] }}</span>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{ route('vendas.store') }}">
                                Visualizar Vendas
                            </a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="card bg-success text-white mb-4">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                Robô
                                <span class="h1">...</span>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{ route('engana_ga.store') }}">
                            Detalhe
                            </a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    Relatórios
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    Clientes
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('reports.customers') }}" method="GET">
                                        <div class="row align-items-end">
                                            <div class="row align-items-end">
                                                <div class="col-12">
                                                    <label>Data Inicial</label>
                                                    <imput type="text" name="date_start" class="form-control">
                                                </div>
                                                <div class="row align-items-end">
                                                    <div class="col-12">
                                                        <label>Data Final</label>
                                                        <imput type="text" name="date_end" class="form-control">
                                                    </div>
                                                    <div class="col-12">
                                                        <button type="submit" class="btn btn-success">Gerar Relatório</button>
                                                    </div>
                                                </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    Vendas
                </div>
                <div class="card-body">
                    <form action="{{ route('reports.vendas') }}" method="GET">
                        <div class="row align-items-end">
                            <div class="row align-items-end">
                                <div class="col-12">
                                    <label>Data Inicial</label>
                                    <imput type="text" name="date_start" class="form-control">
                                </div>
                                <div class="row align-items-end">
                                    <div class="col-12">
                                        <label>Data Final</label>
                                        <imput type="text" name="date_end" class="form-control">
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-success">Gerar Relatório</button>
                                    </div>
                                </div>

                    </form>
                </div>
            </div>
        </div>
        <div>
            @endsection

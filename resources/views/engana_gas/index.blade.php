@extends('layouts.app')
@section('title', 'Informação Hardware')
@section('content')

<div class="card">
    <div class="card-header">
        Tempo de trabalho
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-12 text-rigth">
                <a href="{{ route('engana_ga.create') }}" class="btn btn-success">Observação</a>
            </div>

            <div class="col-12 mt-4">
                <table class="table table-hover">
                    <thead class="thead-dark">
                        <tr>

                            <th>Informações</th>

                        </tr>
                        </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

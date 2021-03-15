@extends('layouts.app')
@section('title', ' Recado')
@section('content')

<form action="{{ route('engana_ga.store') }}" method="POST">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

    @csrf
    <style>
        label {
            display: inline-block;
            min-width: 75px;
            margin-top: 7px;
            margin-bottom: 7px;
        }

        button [type="reset"] {
            border: 3px solid blueviolet;
            padding: 5px 10px;
            border-radius: 5px;
        }

        button[type="submit"] {
            border: 3px solid rgb(50, 220, 50);
        }
    </style>


    <div class="row">
        <div class="col-12">
            <div class="form-group">
           
                <label>Digite a observação do dia</label>
                <input name="observação" type="text" class="form-control">

                </input>



            </div>
        </div>
    </div>


    <button type="submit" class="btn btn-success">Enviar</button>
</form>
@endsection

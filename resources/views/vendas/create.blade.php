@extends('layouts.app')
@section('title', 'Nova Venda')
@section('content')

<form action="{{ route('vendas.store') }}" method="POST">
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

@csrf
<style>
    label{
        display: inline-block;
        min-width:75px;
        margin-top: 7px;
        margin-bottom: 7px;
    }
    button [type="reset"]{
      border: 3px solid blueviolet;
      padding: 5px 10px;
      border-radius: 5px;
  }
    button[type="submit"]{
      border:3px solid rgb(50, 220, 50);
  }
    </style>


<div class="row">
<div class="col-12">
<div class="form-group">

  <label>Cliente</label>
  <select name="customer[id]" class="form-control">
  @foreach($customers as $customer)
  <option value="{{ $customer->id }}">{{ $customer->name }}</option>
   @endforeach
  </select>
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group">
<label>Produto</label>
<select name="produtos[0] [id]"  class="form-control">
  @foreach($produtos as $produto)
  <option value="{{ $produto->id }}">{{ $produto->name }}</option>
   @endforeach
  </select>
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group">
<label>Produto</label>
<select name="produtos[1] [id]" class="form-control">
  @foreach($produtos as $produto)
  <option value="{{ $produto->id }}">{{ $produto->name }}</option>
   @endforeach
  </select>
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group">
<label>Produto</label>
<select name="produtos[2] [id]" class="form-control">
  @foreach($produtos as $produto)
  <option value="{{ $produto->id }}">{{ $produto->name }}</option>
   @endforeach
  </select>
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group">
<label>Produto</label>
<select name="produtos[3] [id]" class="form-control">
  @foreach($produtos as $produto)
  <option value="{{ $produto->id }}">{{ $produto->name }}</option>
   @endforeach
  </select>
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group">
<label>Produto</label>
<select name="produtos[4] [id]" class="form-control">
  @foreach($produtos as $produto)
  <option value="{{ $produto->id }}">{{ $produto->name }}</option>
   @endforeach
  </select>
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group">
<label>Produto</label>
<select name="produtos[5] [id]" class="form-control">
  @foreach($produtos as $produto)
  <option value="{{ $produto->id }}">{{ $produto->name }}</option>
   @endforeach
  </select>
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group">
<label>Produto</label>
<select name="produtos[6] [id]" class="form-control">
  @foreach($produtos as $produto)
  <option value="{{ $produto->id }}">{{ $produto->name }}</option>
   @endforeach
  </select>
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group">
<label>Produto</label>
<select name="produtos[7] [id]" class="form-control">
  @foreach($produtos as $produto)
  <option value="{{ $produto->id }}">{{ $produto->name }}</option>
   @endforeach
  </select>
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group">
<label>Produto</label>
<select name="produtos[8] [id]" class="form-control">
  @foreach($produtos as $produto)
  <option value="{{ $produto->id }}">{{ $produto->name }}</option>
   @endforeach
  </select>
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group">
<label>Produto</label>
<select name="produtos[9] [id]" class="form-control">
  @foreach($produtos as $produto)
  <option value="{{ $produto->id }}">{{ $produto->name }}</option>
   @endforeach
  </select>
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group">
<label>Produto</label>
<select name="produtos[10] [id]" class="form-control">
  @foreach($produtos as $produto)
  <option value="{{ $produto->id }}">{{ $produto->name }}</option>
   @endforeach
  </select>
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group">
<label>Produto</label>
<select name="produtos[11] [id]" class="form-control">
  @foreach($produtos as $produto)
  <option value="{{ $produto->id }}">{{ $produto->name }}</option>
   @endforeach
  </select>
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group">
<label>Produto</label>
<select name="produtos[12] [id]" class="form-control">
  @foreach($produtos as $produto)
  <option value="{{ $produto->id }}">{{ $produto->name }}</option>
   @endforeach
  </select>
</div>
</div>
</div>


<button type="submit" class="btn btn-success">Enviar</button>
</form>
@endsection

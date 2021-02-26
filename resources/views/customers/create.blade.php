@extends('layouts.app')
@section('title', 'Novo Cliente')
@section('content')

<form action="{{ route('customers.store') }}"method="POST">
@csrf
    <div class="row">
        <div class="col-10">
            <div class="form-group">
                <label>Nome</label>
                <input type="text" name="customer[name]" class="form-control" value="{{old('customer.name', '')}}">
            </div>
        </div>

        <div class="col-10 col-sm-4">
            <div class="form-group">
                <label>E-mail</label>
                <input type="email" name="customer[email]" class="form-control" value="{{old('customer.email', '')}}">
            </div>
        </div>

        <div class="col-10 col-sm-4">
            <div class="form-group">
                <label>Data de Nascimento</label>
                <input type="text" name="customer[data_de_nascimento]" class="form-control">
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-12">
            <h5>Endereço</h5>
            <hr>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-12 col-sm-2">
            <div class="form-group">
                <label>CEP</label>
                <input type="text" name="address[cep]" class="form-control" value="{{old('address.cep', '')}}">
            </div>
            </form>


        </div>
        <div class="col-12 col-sm-5">
            <div class="form-group">
                <label>Cidade</label>
                <input type="text" name="address[city]" class="form-control">
            </div>
        </div>
        <div class="col-12 col-sm-1">
            <div class="form-group">
                <label>UF</label>
                <input type="text" name="address[uf]" class="form-control">
            </div>
        </div>
        <div class="col-12 col-sm-4">
            <div class="form-group">
                <label>Bairro</label>
                <input type="text" name="address[district]" class="form-control">
            </div>
        </div>
        <div class="col-12 col-sm-7">
            <div class="form-group">
                <label>Logradouro</label>
                <input type="text" name="address[street]" class="form-control" value="{{old('address.street', '')}}">
            </div>
        </div>
        <div class="col-12 col-sm-1">
            <div class="form-group">
                <label>Número</label>
                <input type="text" name="address[number]" class="form-control">
            </div>
        </div>
        <div class="col-12 col-sm-4">
            <div class="form-group">
                <label>Complemento</label>
                <input type="text" name="address[complement]" class="form-control">
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-12">
            <h5>Telefones</h5>
            <hr>
        </div>
    </div>

    <div class="row mt-2">
        <div class="col-12 col-sm-4">
            <div class="form-group">
                <label>Telefone</label>
                <input type="text" name="phones[0][number]" class="form-control" value="{{old('phone.0.number', '')}}">
            </div>
            </form>

        </div>
        <div class="col-12 col-sm-4">
            <div class="form-group">
                <label>Telefone</label>
                <input type="text" name="phones[1][number]" class="form-control" value="{{old('phone.1.number', '')}}">
            </div>
        </div>
        <div class="col-12 col-sm-4">
            <div class="form-group">
                <label>Telefone</label>
                <input type="text" name="phones[2][number]" class="form-control" value="{{old('phone.2.number', '')}}">
            </div>
        </div>
    </div>

    <div class="mt-3">
        <button  type="submit" class="btn btn-success">Enviar</button>
    </div>

</form>
@endsection

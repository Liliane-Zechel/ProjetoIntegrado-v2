<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acrescentar Produtos</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
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
</head>

<body>
<div class="container">
        @if($errors)
        @foreach($errors->all() as $error)
        <div class="alert alert-danger" role="alert">{{$error}}</div>
        @endforeach
        @endif
    </div>
    <div class="row">

        <div class="col-12 col-sm-6">

            <form action="{{ route('produtos.store') }}" method="POST">
                <div class="card">
                    <div class="card-header">
                        Cadastar Novo Produto
                    </div>
                    <div class="card-body">
                        @csrf

                        <div class="row">

                            <div class="col-12">
                                <div class="form-group">
                                    <label>Nome</label>
                                    <input name="nome" type="text" class="form-control"></input>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label>Unidade</label>
                                    <select name="unidade" class="form-control">
                                        <option>Cabeça</option>
                                        <option>Maço</option>
                                        <option>Kg</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label>Preço R$</label>
                                    <input name="preco" type="double" class="form-control"></input>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label>Quantidade</label>
                                    <input name="quantidade" type="double" class="form-control"></input>
                                </div>
                            </div>

                            <div class="card-footer text-rigth">
                                <button type="submit" class="btn btn-success">Enviar</button>
                                <button type="reset" class="btn btn-success">Limpar</button>
                            </div>
                        </div>
                    </div>
            </form>
</body>

<div class="col-12 col-sm-6">

    <form action="{{ route('produtos.import') }}" method="POST" enctype="multipart/form-data">

        @csrf

        <div class="card">
            <div class="card-header">
                Importar Arquivo CSV
            </div>

            <div class="card-body">

                <div class="row">

                    <div class="col-12">
                        <div class="form-group">
                            <input name="file" type="file" class="custom-file-input" id="file-input">
                            <label class="custom-file-label" for="file-input" data-browse="Procurar">
                            </label>
                        </div>
                        <div class="row align-items-end">
                            <div class="col-12">
                                <label>Tipo de Arquivo de Importção</label>
                                <select class="form-control" name="import_file_type" >
                                <option value="csv">CSV</option>
                                <option value="xls">XLS</option>
                                </select>
                    </div>
                </div>
            </div>
            <div class="card-footer text-rigth">
                <button type="submit" class="btn btn-success">Importar</button>
            </div>
        </div>
    </form>

</div>
</div>

</html>

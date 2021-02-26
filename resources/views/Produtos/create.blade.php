<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acrescentar Produtos</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
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
</head>
<body>
    <div class="container">
        @if($errors)
        @foreach($errors->all() as $error)
        <div class="alert alert-danger" role="alert">{{$error}}</div>
        @endforeach
        @endif
    </div>
        <form action="{{ route('produtos.store') }}"method="POST">
            @csrf
            <div>
                <label>Nome</label>
                <input name="nome" type="text"></input>
            </div> 

            <div>   
                <label>Unidade</label>
                <select name="unidade">
                <option>Cabeça</option>
                <option>Maço</option>
                <option>Kg</option>
                </select>
            </div>

            <div>
                <label>Preço R$</label>
                <input name="preco" type="double"></input>
            </div>

            <div>
                <label>Quantidade</label>
                <input name="quantidade" type="double"></input>
            </div>
            <div>
                <button type ="submit">Enviar</button>
                <button type="reset">Limpar</button>
            </div>
        </form>
        <script src="{{asset('js/jquery-3.5.1.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>
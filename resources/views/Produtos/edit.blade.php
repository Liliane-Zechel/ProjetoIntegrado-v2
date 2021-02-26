<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Produtos</title>
    <style>
    label{
        display: inline-block;
        min-width:75px;
        margin-top: 7px;
        margin-bottom: 7px;
    }
    button[type="reset"]{
      border: 1px solid blueviolet;
      padding: 5px 10px;
      border-radius: 5px;
  }
    button[type="submit"]{
      border:3px solid rgb(50, 220, 50);
  }
    </style>
</head>
<body>
        <form action="{{ route('produtos.update', $produto->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <label>Nome</label>
                <input name="nome" type="text" value="{{$produto->nome}}"></input>
            </div> 

            <div>   
                <label>Unidade</label>
                <select name="unidade">
                <option {{$produto->unidade == 'Cabeça' ? 'selected' : ''}}>Cabeça</option>
                <option {{$produto->unidade =='Maço' ? 'selected':''}}>Maço</option>
                <option {{$produto->unidade =='Kg' ? 'selected':''}}>Kg</option>
                </select>
            </div>

            <div>
                <label>Preço R$</label>
                <input name="preco" type="double"value="{{$produto->preco}}"></input>
            </div>

            <div>
                <label>Quantidade</label>
                <input name="quantidade" type="double" value="{{$produto->quantidade}}"></input>
            </div>
            <div>
        <button type ="submit">Enviar</button>
        <button type="reset">Limpar</button>
    </div>
        </form>
</body>
</html>
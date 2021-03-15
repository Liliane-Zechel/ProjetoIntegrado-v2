<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório de Vendas</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">

                <h1 class="text-center mt-4">Relatório de Vendas</h1>

                <table class="table table-bordered mt-4">
                    <thead>
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
    <script>
        window.print();
    </script>
</body>

</html>

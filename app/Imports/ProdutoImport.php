<?php

namespace App\Imports;

use App\Produto;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
class ProdutoImport implements ToModel, WithHeadingRow
{

    public function model(array $row)
    {
        return new Produto([
            'nome'=> $row['nome'],
            'unidade'=> $row['unidade'],
            'preco'=> $row['preco'],
            'quantidade'=> $row['quantidade']
        ]);
    }
}

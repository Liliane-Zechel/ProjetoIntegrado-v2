<?php

namespace App\Exports;

use App\Produto;
use Maatwebsite\Excel\Concerns\FromCollection;

class ProdutoExport implements FromCollection
{
    protected $dateStart;
    protected $dateEnd;
    public function __construct($dateStart, $dateEnd)
    {
        $this->dateStart = $dateStart;
        $this->dateEnd = $dateEnd;
    }

    public function collection()
    {
        $produtos = Produto::select('nome', 'unidade', 'preco', 'quantidade');
        if ($this->dateStart != '') {
            $produtos = $produtos->where('created_at', '>=', $this->dateStart);
        }
        if ($this->dateEnd != '') {
            $produtos = $produtos->where('created_at', '<=', $this->dateEnd);
        }
        return $produtos->get();
    }
}

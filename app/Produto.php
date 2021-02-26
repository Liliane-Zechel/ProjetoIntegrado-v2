<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Produto extends Model
{
    use softDeletes;
    //
    protected $fillable =[
        'nome',
        'unidade',
        'preco',
        'quantidade'
    ];
}

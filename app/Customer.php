<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable =[
        'name',
        'email',
        'data_de_nascimento'
    ];
    public function address()
    {
        return $this->hasOne('App\Address');
    }
    public function phones()
    {
        return $this->hasMany('App\Phone');
    }
}

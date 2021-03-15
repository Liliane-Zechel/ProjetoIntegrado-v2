<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Venda extends Model
{
    protected $fillable =[

        'return_date',
        'user_id',
        'customer_id'
        

    ];
    public function produtos()
    {
        return $this->belongsToMany('App\Produto', 'item_venda', 'venda_id', 'item_id');
    }
    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function getReturnDateAttribute($value)
    {
        return Carbon::createFromFormat('Y-m-d', $value)->format('d/m/Y');
    }
}

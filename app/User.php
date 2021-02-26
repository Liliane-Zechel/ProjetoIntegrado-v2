<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\User as Authenticable;

class User extends Authenticable
{
    protected $fillable = [
        'name',
        'email',
        'password',
        'role'
    ];
    protected $hidden =[
        'password'
    ];

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);

    }
    public function getNameAttribute($value)
    {
        $nameLowercase = strtolower($value);
        $nameUppercaseFirst = ucfirst($nameLowercase);
        return $nameUppercaseFirst;
    }
}

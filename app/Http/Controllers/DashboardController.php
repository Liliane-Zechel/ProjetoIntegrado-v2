<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Produto, User, Customer, Venda};

class DashboardController extends Controller
{
    public function index()
    {
        $counts = [
            'produtos' => Produto::count(),
            'users' => User::count(),
            'customers' => Customer::count(),
            'vendas' => Venda::count(),

        ];

        return view('dashboard', compact('counts'));
    }
}

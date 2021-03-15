<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Customer, Venda};


class ReportController extends Controller
{
    public function generateCustomersReport(Request $request)
    {
             $customers = Customer::all();
             return view('reports.customers', compact('customers'));
    }

    public function generateVendasReport(Request $request)
    {
        $vendas = Venda::all();
        return view('reports.vendas', compact('vendas'));
    }
}

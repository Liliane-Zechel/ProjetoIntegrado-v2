<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\{Customer,  Produto, Venda};
use Carbon\Carbon;
use DB;



class VendaController extends Controller
{
    public function index()
    {

        $vendas= Venda::all();
      return view('vendas.index', compact('vendas'));
    }
    public function create()
    {

        $produtos =  Produto::all();
       $customers = Customer::all();

       return view('vendas.create', compact('produtos', 'customers'));
    }
    public function store(Request $request)
    {

        DB::beginTransaction();

        try {



      $customer = Customer::findOrFail($request->customer['id']);

       $venda = Venda::create([
        'customer_id'=> $customer->id,
        'user_id'=> auth()->user()->id,
        'return_date'=> Carbon::now()->addDays(3)->format('Y-m-d')
      ]);
           foreach($request->produtos as $produto) {
               $venda->produtos()->attach($produto['id']);
            }

            DB::commit();

           }catch(\Exception $exception){

               DB::rollback();
               return back()->with('msg_error', 'Erro no servidor ao realizar venda');
           }

         return redirect()
         ->route('vendas.index')
         ->with('msg_success', 'Venda realizada com sucesso!');
        }



    }


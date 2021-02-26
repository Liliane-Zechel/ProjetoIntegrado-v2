<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use DB;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return view('customers.index', compact('customers'));
    }
    public function create()
    {
        return view('customers.create');

    }
    public function store(Request $request)
    {
        DB::beginTransaction();
        try{
            $customer = Customer::create($request['customer']);
            $customer->address()->create($request['address']);
            foreach($request->phones as $phone){
            $customer->phones()->create($phone);
            }
            DB::commit();
        }catch(\Exception $exception){
            DB::rollback();
            return back()->with('msg_error', 'Erro no servidor ao cadastrar cliente');
        }
        return redirect()->route('customers.index')->with('msg_success', 'Cliente Cadastrado com Sucesso!');  
    }
    public function edit(Customer $customer)
    {
        return view('customers.edit', compact('customer'));
    }
    public function update(Request $request, Customer $customer)
    {
        DB::beginTransaction();
        try{
            $customer->update($request['customer']);
            $customer->address()->update($request['address']);

            foreach($request->phones as $phone){
                $customerPhone = $customer->phones()->where('id', $phone['id']);  
                if($phone ['id']){
                    if(isset($phone['delete'])){
                        $customerPhone->delete();
                    }else{
                        $customerPhone->update([
                        'number' => $phone['number']
                        ]);
                    }
                }else{
                    if($phone['number'] !== null){
                        $customer->phones()->create($phone);
                    }
                }
            }
            DB::commit();
        }catch(\Exception $exception){
            DB::rollback();
            return back()->with('msg_error', 'Erro no servidor ao atualizar cliente');
        }  
            return redirect()->route('customers.index')->with('msg_success', 'Cliente Atualizado com Sucesso!');
    }
}

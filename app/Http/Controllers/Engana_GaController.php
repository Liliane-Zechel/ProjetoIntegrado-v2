<?php

namespace App\Http\Controllers;

use App\Engana_Ga;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;


class Engana_GaController extends Controller
{

   public function index()
   {


     return view('engana_gas.index');
   }
   public function create()
   {


      return view('engana_gas.create ');
   }
   public function store(Request $request)
   {


        DB::beginTransaction();

        try {



      $engana_ga = Engana_Ga::findOrFail($request->engana_ga['id']);

       $engana_ga = Engana_Ga::create([
        'relatório',
        'return_date'=> Carbon::now()->addDays(3)->format('Y-m-d')
      ]);
           foreach($request->engana_gas as $engana_ga) {
               $engana_ga->attach($engana_ga['id']);
            }

            DB::commit();

           }catch(\Exception $exception){


           }

         return redirect()
         ->route('engana_gas.index')
         ->with('msg_success', 'Mensagem enviada com sucesso!');
        }






        }





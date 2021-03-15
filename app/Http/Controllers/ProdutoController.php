<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProdutoRequest;
use App\Produto;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ProdutoImport;
use App\Exports\ProdutoExport;
use Carbon\Carbon;

class ProdutoController extends Controller
{

    public function index()
    {
        $produtos = Produto::all();
        return view('produtos.index', compact('produtos'));
    }
    public function create()
    {
        return view('produtos.create');
    }
    public function store(ProdutoRequest $request)
    { {
            try {
                $produto = new Produto;
                Produto::create($request->all());
            } catch (\Exception $e) {
                return redirect()->route('produtos.index')->withErrors();
            }
            return redirect()->to('produtos')->with('msg_success', 'Produto Cadastrado com Sucesso!');
        }
    }
    public function edit($id)
    {
        $produto = Produto::findOrfail($id);
        return view('produtos.edit', compact('produto'));
    }
    public function update(Request $request, $id)
    {
        $produto = Produto::findOrfail($id);
        $produto->update($request->all());
        return redirect()->to('produtos')->with('msg_success', 'Produto Atualizado com Sucesso!');
    }
    public function destroy($id)
    {
        $produto = Produto::findOrfail($id);
        $produto->delete();
        return redirect()->to('produtos')->with('msg_success', 'Produto Apagado com Sucesso!');
    }

    public function import(Request $request)
    {

        $file = $request->files->get('file');
       
    try{

        Excel::import(new ProdutoImport, $file);

         }catch(\Exception $exception) {

             return back()->with('msg_error', 'Erro ao importar produtos!');
         }

        return back()->with('msg_success', 'Produtos importados com sucesso!');
    }

    public function  export(Request $request)
    {
        $dateStart = Carbon::parse($request->date_start)->startofDay();
        $dateEnd = Carbon::parse($request->date_end)->endofDay();
        $exportFileType = $request->export_file_type;
        return Excel::download(new ProdutoExport($dateStart,$dateEnd ), 'produtos.' . $exportFileType);
    }
}

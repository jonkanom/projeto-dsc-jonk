<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estagio;
use App\Http\Requests\EstagioRequest;

class EstagioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dados = Estagio::all();
        
        return view('estagio', [
            'objetos' => $dados
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('estagio-cadastro');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EstagioRequest $request)
    {
        $dados_formulario = $request->validated();

        $retorno = Estagio::create($dados_formulario);

        if($retorno){
            return redirect()->route('estagio');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $dado = Estagio::find($id);

        if($dado){
            return view('estagio-alterar', 
                        ['objeto' => $dado]
                    );
        }else{
            return redirect()->back();
        }
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EstagioRequest $request, string $id)
    {
      
        $dados_formulario = $request->validated();
        $registro_recuperado = Estagio::find($id);

        if($registro_recuperado){
            $registro_recuperado->update($dados_formulario);
            return redirect()->route('estagio');
    
        }else{
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $registro_recuperado = Estagio::find($id);

        if($registro_recuperado){
            $registro_recuperado->delete();
            return redirect()->route('estagio');
        }else{

            return redirect()->back();
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use Illuminate\Http\Request;

class AutorController extends Controller
{
    private $repository;

    public function __construct(Autor $autor)
    {
        $this->repository = $autor;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       // dd('acessando o controller autor controler - index');// mostrar uma mensagem 
        $registros = $this->repository->paginate(60);
	   // dd($registros);

        return view ('autor.index', [
            'registros' => $registros, //Procura no index a variavel registro e coloca em registros
    
    ]); //retorna os conteudo para determinado local
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //dd('acessando o controller autor controler - create');
        return view('autor.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $registro = $request->all();
        $this->repository->create($registro);
        return redirect()->route('autor.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $registro = $this->repository->find($id);
        return view ('autor.show', [
        'registro'=> $registro
    ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $registro = $this->repository->find($id);
        return view ('autor.edit', [
            'registro'=>$registro
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         //
         $registro = $request->all();
         $autor = $this->repository->find($id);
 
         //$autor['nome'] = $registro['nome'];
         //$autor['apelido'] = $registro['apelido'];
         //$autor['cidade'] = $registro['cidade'];
         //$autor['bairro'] = $registro['bairro'];
         //$autor['cep'] = $registro['cep'];
         //$autor['email'] = $registro['email'];
         //$autor['telefone'] = $registro['telefone'];
         //$this->repository->update($autor);
 
         //$autor->save();
 
         $autor->update($registro);

         return redirect()->route('autor.index');
         
         //dd($registro);
    }

    public function delete($id){
       $registro = $this->repository->find($id);

       return view ('autor.destroy', [
        'registro' => $registro
       ] );
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $registro = $this->repository->find($id);
        $registro->delete($id);    
        return redirect()->route('autor.index');   
    }
}

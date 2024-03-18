<?php

namespace App\Services;
use App\Entity\User;
use App\Models\Autor;
use Illuminate\Http\Request;

class AutorService implements AutorServiceInterface{

    private $repository;

    public function __construct(Autor $autor)
    {
        $this->repository = $autor;
    }

    public function index(){
        $registros = $this->repository->paginate(5);
        return (["registros"=> $registros]);
    }
 
    public function create(){}

    public function store(Request $request){
        $this->repository->create($request->all());
    }

    public function show($id){
        $registro = $this->repository->find($id);
        return ([
            "registros"=>$registro
        ]);
    }
    
    public function edit($id){}

    public function update(Request $request, string $id){

        $autorCadastrado = $this->repository->find($id);
        $autorCadastrado->update($$request->all());

    }

    public function delete($id){}
    
    public function destroy(string $id){
        $autorCadastrado = $this->repository->find($id);
        $autorCadastrado->delete();
    }
}

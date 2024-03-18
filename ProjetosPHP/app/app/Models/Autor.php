<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    use HasFactory;


    protected $fillable = [

        "nome", "apelido", "cidade", "bairro", "cep", "email", "telefone"

    ];

    public function rules(){
        return [
            'nome' => 'required',
            'apelido'=> 'required',
            'cidade'=> 'required',
            'bairro'=> 'required',
            'cep'=>'required',
            'email'=> 'required',
            'telefone'=> 'required'

        ];
    }

    public function feedback(){
        return[ 
        'nome' => 'o campo :attribute é obrigatório ser informado!',
        'apelido'=> 'o campo :attribute é obrigatório ser informado!',
        'cidade'=> 'o campo :attribute é obrigatório ser informado!',
        'bairro'=> 'o campo :attribute é obrigatório ser informado!',
        'cep'=>'o campo :attribute é obrigatório ser informado!',
        'email'=> 'o campo :attribute é obrigatório ser informado!',
        'telefone'=> 'o campo :attribute é obrigatório ser informado!'];
    }
}

<?php

namespace App\Services;

use App\Entity\User;
use Illuminate\Http\Request;

interface AutorServiceInterface{

    public function index();


    public function store(Request $request);

    public function show();
    
    public function update(Request $request, string $id);
    
    public function destroy(string $id);

}
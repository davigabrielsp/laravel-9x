<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index(){
        return view('produto.index');
    }

    public function show($id = 0){
        return 'produto id: ' . $id;
    }
}

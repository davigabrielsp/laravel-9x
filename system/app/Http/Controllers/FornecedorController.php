<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){
        $fornecedores =[
            0 =>[
                'nome' => 'fornecedor 1',
                'status' => 1,
                'cnpj' => 0,
                'ddd' => '11',
            ],
            1 =>[
                'nome' => 'fornecedor 2',
                'status' => 2,
                'cnpj' => 2465654565456,
                'ddd' => '31',
            ],
            2 =>[
                'nome' => 'fornecedor 2',
                'status' => 2,
                'cnpj' => 2465654565456,
                'ddd' => '42',
            ],
            
        ];

        return view('app.fornecedores.index', compact(var_name: 'fornecedores'));
    }
}

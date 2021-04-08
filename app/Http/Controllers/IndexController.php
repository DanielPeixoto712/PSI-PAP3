<?php

namespace App\Http\Controllers;
use App\Models\Produto;
use App\Models\Marca;
use App\Models\Categoria;


use Illuminate\Http\Request;

class IndexController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $produtos = Produto::all();
    	$marcas = Marca::all();
         return view('index', ['produto'=>$produtos,'marca'=>$marcas
   ]);
    }
    
}


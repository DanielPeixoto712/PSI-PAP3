<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marca;

class MarcasController extends Controller
{
 public function index(){
     
       $marca = Marca::all();
  

       return view('produtos.index', ['marcas'=>$marca
   ]);

   }
    public function show (Request $request){
        $idMarca=$request->id;
        $marca=Marca::where('id_marca',$idMarca)->first();
       

    return view('produtos.show',  ['marca'=>$marca
]);
}

public function marcas(){
     
       $marca = Marca::all();
  

           return view('marcas.marcas',  ['marca'=>$marca
]);
 

   }

public function create(){
  $marca=Marca::all();
 
    return view('marcas.create', ['marca'=>$marca]);
}
public function store(request $request){
    $novaMarca=$request->validate ([
        'marca'=>['required','max:100'],
        

]);

    $marca=Marca::create($novaMarca);
    return redirect()->route('marcas.marcas');
}



}
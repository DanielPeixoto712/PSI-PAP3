<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriasController extends Controller
{
 public function index(){
     
       $categoria = Categoria::all();
  

       return view('categorias.index', ['categorias'=>$categoria
   ]);

   }
    public function show (Request $request){
        $idCategoria=$request->id;
        $categoria=Categoria::where('id_categoria',$idCategoria)->with(['marca'])->first();

    return view('categorias.show',  ['categoria'=>$categoria
]);
}


public function categorias(){
     
       $categoria = Categoria::all();
  

           return view('categorias.categorias',  ['categoria'=>$categoria
]);
 

   }

public function create(){
  $categoria=Categoria::all();
 
    return view('categorias.create', ['categoria'=>$categoria]);
}
public function store(request $request){
    $novaCategoria=$request->validate ([
        'designacao'=>['required','max:100'],
        

]);

    $categoria=Categoria::create($novaCategoria);
    return redirect()->route('categorias.categorias');
}



}
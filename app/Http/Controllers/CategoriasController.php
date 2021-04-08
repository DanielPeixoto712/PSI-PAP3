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



}
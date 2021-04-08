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

}
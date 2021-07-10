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

public function delete (request $request){
   $idMarca=$request->id;
   $marca=Marca::where('id_marca',$idMarca)->first();
  $marca=Marca::findOrFail($idMarca);
  $marca->delete();

return redirect()->route('produtos.index')->with('mensagem','Marca Eliminada com Sucesso!');
}

public function edit (Request $request){
   $idMarca=$request->id;
   $marca=Marca::where('id_marca',$idMarca)->first();
   $marca=Marca::findOrFail($idMarca);
  
  
  

   return view('marcas.marcas')->with('mensagem','Marca Editada com Sucesso!');
 }
 


   public function update(Request $request){
   $idMarca=$request->id;
   $marca=Marca::findOrfail($idMarca);


   $atualizarReport=$request->validate([
    'marca'=>['required', 'min:3', 'max:100'],
    
]);
   $marca->update($atualizarMarca);

  return redirect()->route('marcas.marcas');
}


}
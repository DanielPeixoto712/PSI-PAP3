<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;
use App\Models\Admin;
use App\Models\Produto;
use App\Models\Marca;
use App\Models\Categoria;
use App\Models\User1;
use App\Models\User;
use App\Models\Anuncio;
use App\Models\Report;

class UsersController extends Controller
{
 public function index(){
     


       return view('users');

   }

  public function delete (request $request){
   $idUser=$request->id;
   $user=User::where('id',$idUser)->first();
  $user=User::findOrFail($idUser);
  $user->delete();

return redirect()->route('produtos.index')->with('mensagem','User Eliminado com Sucesso!');
}
    

    
 

}
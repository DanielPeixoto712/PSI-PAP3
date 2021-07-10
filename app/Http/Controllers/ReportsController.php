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

class ReportsController extends Controller
{
 public function index(){
     


       return view('reports');

   }

   public function delete (request $request){
   $idReport=$request->id;
   $report=Report::where('id_report',$idReport)->first();
  $report=Report::findOrFail($idReport);
  $report->delete();

return redirect()->route('produtos.index')->with('mensagem','Denúncia Eliminado com Sucesso!');
}


}
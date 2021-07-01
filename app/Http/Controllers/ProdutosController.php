<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;
use App\Models\Produto;
use App\Models\Marca;
use App\Models\Categoria;
use App\Models\User;
use App\Models\Anuncio;
use App\Models\Report;


class ProdutosController extends Controller
{
 public function index(){
     
       $produtos = Produto::all();

       //$produto=Produto::where('id_produto',$idProduto)->with(['marca','categoria'])->first();
     $marcas=Marca::all();


       return view('produtos.index', ['produto'=>$produtos, 'marca'=>$marcas
   ]);

   }
    public function show (Request $request){
        $idProduto=$request->id;
        $produto=Produto::where('id_produto',$idProduto)->with(['marca','categoria'])->first();
        $marcas=Marca::all();
         
       

            

    return view('produtos.show',  ['produto'=>$produto,'marca'=>$marcas
]);
}
    
public function showMarca (Request $request){
        $idMarca=$request->id;
       $produtos=Produto::where('id_marca',$idMarca)->with(['marca','categoria'])->first();
    $marcas=Marca::all();

    return view('produtos.showMarca',  ['produto'=>$produtos,'marca'=>$marcas
]);
}
    


public function create(){
  $categorias=Categoria::all();
  $marcas=Marca::all();
 
    return view('produtos.create', ['categorias'=>$categorias, 'marcas'=>$marcas]);
}
public function store(request $request){
    $novoProduto=$request->validate ([
        'id_categoria'=>['required','max:100'],
        'id_marca'=>['required','max:100'],
        'preco'=>['nullable','min:2','max:10000000'],
        'produto'=>['nullable','min:2','max:200'],
        'observacoes'=>['nullable','min:2','max:20000000'],
        'info'=>['nullable','min:2','max:200'],
        'id'=>['nullable','required','min:1','max:50'],
        'imagem_capa'=>['image','nullable','max:20000']


]);
if($request->hasFile('imagem_capa')){
  $nomeimagem=$request->file('imagem_capa')->getClientOriginalName();
  $nomeimagem=time().'_'.$nomeimagem;
  $guardarimagem=$request->file('imagem_capa')->storeAs('imagens/produtos',$nomeimagem);
  $novoProduto['imagem_capa']=$nomeimagem;
}


    $produto=Produto::create($novoProduto);
    return redirect()->route('produtos.show',[
        'id'=>$produto->id_produto]);
}

public function edit (Request $request){
    $idProduto=$request->id;
   $produto=Produto::where('id_produto',$idProduto)->first();

   if(Gate::allows('atualizar-produto', $produto)|| Gate::allows('admin')){
  $categorias=Categoria::all();
  $marcas=Marca::all();
  
 

  


   return view('produtos.edit',['produto'=>$produto, 'categorias'=>$categorias, 'marcas'=>$marcas]);

   }
    else{
      return redirect()->route('produtos.index')->with('mensagem','Não tem permissão para editar este anuncio!');
    }
 
}


   public function update(Request $request){
   $idProduto=$request->id;
   $produto=Produto::findOrfail($idProduto);
   $imagemantiga=$produto->imagem_capa;
   $atualizarProduto=$request->validate([
       'id_categoria'=>['required','max:100'],
        'id_marca'=>['required','max:100'],
        'preco'=>['nullable','min:2','max:10000000'],
        'produto'=>['nullable','min:2','max:200'],
        'observacoes'=>['nullable','min:2','max:20000000'],
        'info'=>['nullable','min:2','max:200'],
        'id'=>['nullable','required','min:1','max:50'],
        'imagem_capa'=>['image','nullable','max:20000']
]);
   if($request->hasFile('imagem_capa')){
  $nomeimagem=$request->file('imagem_capa')->getClientOriginalName();
  $nomeimagem=time().'_'.$nomeimagem;
  $guardarimagem=$request->file('imagem_capa')->storeAs('imagens/produtos',$nomeimagem);
if(!is_null($imagemantiga)){
  Storage::Delete('imagens/produtos'.$imagemantiga);
}

  $atualizarproduto['imagem_capa']=$nomeimagem;
}
   $produto->update($atualizarProduto);

  return redirect()->route('produtos.show', ['id'=>$produto->id_produto
]);
}


public function delete (request $request){
   $idProduto=$request->id;
   $produto=Produto::where('id_produto',$idProduto)->first();
    $idProduto=$request->id;

    if(Gate::allows('atualizar-produto', $produto)|| Gate::allows('admin')){
  $produto=Produto::findOrFail($idProduto);
  $produto->delete();

return redirect()->route('produtos.index')->with('mensagem','Anuncio Eliminado com Sucesso!');
}
    else{
      return redirect()->route('produtos.index')->with('mensagem','Não tem permissão para remover este anuncio!');
    }

}
public function admins (request $request){

 return view('produtos.admins');

}

public function users (request $request){

$users= User::all();

 return view('produtos.users')->with('users', $users);

}

public function anuncios (request $request){

$produtos= Produto::all();


 return view('produtos.anuncios')->with('produtos', $produtos);

}

public function create1(){
  $report=Report::all();
  $produtos=Produto::all();
  $users=User::all();



 
    return view('reports.create1', ['produtos'=>$produtos, 'users'=>$users]);
}
public function repo(request $request){
    $novoReport=$request->validate ([
        'id_produto'=>['required'],
        'id'=>['required'],
        'produto'=>['required'],
        'report'=>['required'],
        'vendedor'=>['required'],
        

]);

    $report=Report::create($novoReport);
  return redirect()->route('produtos.index')->with('mensagem','Anuncio denunciado com Sucesso! Iremos entrar em contacto com o vendedor. Obrigado!');;
}

}
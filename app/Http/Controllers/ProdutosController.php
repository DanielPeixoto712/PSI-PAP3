<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Models\Produto;
use App\Models\Marca;
use App\Models\Categoria;


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
        'preco'=>['nullable','min:2','max:200'],
        'produto'=>['nullable','min:2','max:200'],
        'observacoes'=>['nullable','min:2','max:200'],
        'info'=>['nullable','min:2','max:200'],
        'id'=>['nullable','required','min:1','max:50']


]);



    $produto=Produto::create($novoProduto);
    return redirect()->route('produtos.show',[
        'id'=>$produto->id_produto]);
}

public function edit (Request $request){
    $idProduto=$request->id;
   $produto=Produto::where('id_produto',$idProduto)->first();
//dd($produto);
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

   $atualizarProduto=$request->validate([
    'id_categoria'=>['required','max:100'],
        'id_marca'=>['required','max:100'],
        'preco'=>['nullable','min:2','max:200'],
        'produto'=>['nullable','min:2','max:200'],
        'observacoes'=>['nullable','min:2','max:200'],
        'info'=>['nullable','min:2','max:200'],
        'id'=>['nullable','required','min:1','max:50']
]);
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

return redirect()->route('produtos.index')->with('mensagem','Produto Eliminado com Sucesso!');
}
    else{
      return redirect()->route('produtos.index')->with('mensagem','Não tem permissão para remover este anuncio!');
    }

}

}
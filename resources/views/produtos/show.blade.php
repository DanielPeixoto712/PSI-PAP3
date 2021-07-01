@extends('layout')
<br><br><br>
<link href=" {{ URL::asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">


    <script src="vendor/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>



@section ('titulo')

@endsection

@section ('navbar')


@endsection

@section ('menu')


@endsection

@section ('produtos')





<div align="center">
        <a href="{{route('produtos.edit', ['id'=>$produto->id_produto])}}"><button type="button" class="btn btn-outline-success">Editar</button></a>
       <a href="{{route('produtos.delete',['id'=>$produto->id_produto])}}"><button type="button" class="btn btn-outline-danger">Apagar</button></a>
       <a href="{{route('produtos.create1')}}"><button type="button" class="btn btn-outline-primary">Denunciar</button></a>
           
</div><br>

<div class="col-lg-9">

        <div class="card mt-4">
           @if(isset($produto->imagem_capa))
          <img class="card-img-top img-fluid" src="{{asset('imagens/produtos/'.$produto->imagem_capa)}}" alt="">@endif
          <div class="card-body">
            <h3 class="card-title"></h3>
            <h5>{{$produto->preco}}
             €</h5>
             <h3>{{$produto->marca->marca}}</h3>
            <p class="card-text">{{$produto->observacoes}}</p>
            <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
            4.0 stars
          </div>
        </div>





<div  class="card card-outline-secondary my-4">
          <div class="card-header">
             Informações do Vendedor
          </div>
          <div class="card-body">

          <p> <li>Nome do vendedor</li>{{$produto->users->name}}</p>
          <hr>
          <p><li>Contacto do vendedor</li> {{$produto->users->contacto}}</p>
          <hr>

          
           
            
            <a href="#" class="btn btn-success">Ligar</a>
          </div>
        </div>





        

        <!--
        <div class="card card-outline-secondary my-4">
          <div class="card-header">
             Avaliações do vendedor
          </div>
          <div class="card-body">
            <p>avaliação1</p>
            <small class="text-muted">Posted by Daniel on 01/03/2021</small>
            <hr>
            <p>avaliação2</p>
            <small class="text-muted">Posted by Anonymous on 3/1/17</small>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
            <small class="text-muted">Posted by Anonymous on 3/1/17</small>
            <hr>
            <a href="#" class="btn btn-success">Avaliar</a>
          </div>
        </div>
       -->

      </div>
      <!-- /.col-lg-9 -->

    </div>



  </div>


@endsection

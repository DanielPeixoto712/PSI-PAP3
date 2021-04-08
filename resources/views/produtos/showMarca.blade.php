@extends('layout')
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
           
        {{$produto->id_produto}}
        {{$produto->produto}}
        {{$produto->marca->marca}}         
        {{$produto->categoria->categoria}}   
        {{$produto->preco}}    


@endsection

@section ('rodape')
@endsection





<br>
<br><br><br>











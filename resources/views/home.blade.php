@extends('layouts.app')

@section('content')

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="fa/css/all.css">
    <script type="text/javascript" src="fa/js/all.js"></script>
    <script src="js/jquery-3.5.1.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" align="center">{{ __('AutoParts') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert" >
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Você efetuou o login com sucesso! ') }}
                    <div align="center">
    <br>
<button type="button" class="btn btn-primary"> <a style="color: white" href="{{route('index')}}">Ir para o site!</a></button><br><br>

   
</div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

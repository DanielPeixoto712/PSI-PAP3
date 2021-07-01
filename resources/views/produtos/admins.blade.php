@extends ('layout')
@section ('titulo')
@endsection
<br><br><br>
@section ('navbar')
@endsection

@section ('menu')
@endsection

@section ('produtos')
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="{{ URL::asset('vendor/jquery/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('vendor/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
    

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <span class="glyphicon glyphicon-bookmark"></span> Menu Administradores</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-6 col-md-6">
                          <a href="{{route('produtos.anuncios')}}" class="btn btn-danger btn-lg" role="button"><span class="glyphicon glyphicon-list-alt"></span> Anuncios</a><br><br>
                          <a href="{{route('marcas.marcas')}}" class="btn btn-warning btn-lg" role="button"><span class="glyphicon glyphicon-bookmark"></span> Marcas</a><br><br>
                          <a href="#" class="btn btn-primary btn-lg" role="button"><span class="glyphicon glyphicon-signal"></span> Reports</a><br><br>
                          <a href="#" class="btn btn-primary btn-lg" role="button"><span class="glyphicon glyphicon-comment"></span> Comments</a><br>
                        </div>
                        <div class="col-xs-6 col-md-6">
                          <a href="{{route('produtos.users')}}" class="btn btn-success btn-lg" role="button"><span class="glyphicon glyphicon-user"></span> Users</a><br><br>
                          <a href="{{route('categorias.categorias')}}" class="btn btn-info btn-lg" role="button"><span class="glyphicon glyphicon-file"></span> Categorias</a><br><br>
                          <a href="#" class="btn btn-primary btn-lg" role="button"><span class="glyphicon glyphicon-picture"></span> Photos</a><br><br>
                          <a href="#" class="btn btn-primary btn-lg" role="button"><span class="glyphicon glyphicon-tag"></span> Tags</a><br><br>
                        </div>
                    </div>

                    <br>
                    <a href="http://www.jquery2dotnet.com/" class="btn btn-success btn-lg btn-block" role="button"><span class="glyphicon glyphicon-globe"></span> Website</a><br><br>
                </div>
            </div>
        </div>
    </div>
</div>


</div>
@endsection

@section ('rodape')
@endsection

@extends('layout')

@section ('titulo')
@endsection

@section ('navbar')
@endsection

@section ('menu')

          
@endsection

@section ('produtos')

 <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel" style="width: 930px">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="{{ URL::asset('img/1.jpg') }}" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="{{ URL::asset('img/2.jpg') }}" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="{{ URL::asset('img/3.png') }}" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>




<div class="row">
<div class="col-md-3 offset-md-1">
          <div  class="card" style="width: 18rem;" >
  <img class="card-img-top" src="img/susp2.jpg" alt="Imagem de capa do card">
  <div class="card-body">
    <h5 class="card-title">Temos vários volantes!</h5>
    <p class="card-text">Para todos os gostos!</p>
  </div>
</div>
</div>

<div class="col-md-3 offset-md-1">

<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="img/sparco1.jpg" alt="Imagem de capa do card">
  <div class="card-body">
    <h5 class="card-title">Temos vários volantes!</h5>
    <p class="card-text">Para todos os gostos!</p>
   
  </div>
</div>
</div>

<div class="col-md-3 offset-md-1">
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="img/bomp1.jpg" alt="Imagem de capa do card">
  <div class="card-body">
    <h5 class="card-title">Aqui encontra o motor que procura!</h5>
    <p class="card-text">Procure aqui!</p>
    
  </div>
</div>
</div>
</div> 


          

        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>



@endsection

@section ('rodape')
@endsection



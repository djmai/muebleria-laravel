@extends('Template.template')
@section('title','Productos')
@section('conteiner')
<div id="Category" class="conteinerCarouselCategory">
  <!--link category-->
<div class="conteinerCategorias"><a href="{{route('category.list')}}"  ><button id="btnCategory" class="btn btn-primary" >Ir a categorias</button> </a></div>
  <!--end link category-->
  <!--carousel category-->
  <div class="conteinerCarousel2" >
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="/imagenes/photo/RoperoCategoria.jpg" class="d-block w-100" alt="..." width="9%" height="370px">
          </div>
          <div class="carousel-item">
            <img src="/imagenes/photo/ClosetCategoria.jpg" class="d-block w-100" alt="..." width="49%" height="370px">
          </div>
          <div class="carousel-item">
            <img src="/imagenes/photo/CamaroteCategoria.jpg" class="d-block w-100" alt="..." width="49%" height="370px">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
  </div>
  <!--end carousel category-->
</div>
@endsection
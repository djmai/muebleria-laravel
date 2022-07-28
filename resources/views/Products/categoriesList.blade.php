@extends('Template.template')
@section('title','Lista de Categorias')
@section('style')
<link href="{{ asset('css/categoriesList.css') }}" rel="stylesheet">
@endsection
@section('conteiner')
<div class="category">
    @foreach($category as $categoriesIterate)
    <div class="conteinerConName" >
        <div class="contCatName">    
            <a href="{{route('category.products',$categoriesIterate->category)}}" ><button id="btnCategory" class="btn btn-primary" >{{$categoriesIterate->category}}</button></a>
         </div>
        <div class="contCatPhoto">
            <img src="/imagenes/photo/{{$categoriesIterate->photo}}" width="100%" height="100%" >
        </div>
    </div>
    @endforeach
</div>
@endsection
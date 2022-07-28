@extends('Template.template')
@section('title','Prodcutos por Detalle')
@section('style')
    <link href="{{ asset('css/productDetail.css') }}" rel="stylesheet">
@endsection
@section('conteiner')
<div class="linkProducts">
    <a href="{{route('category.products',$product->category)}}" ><button id="btnCategory" class="btn btn-primary" >Volver a la categoria {{$product->category}}</button></a>
</div>
<div class="conteinerProduct" >
    <div class="details">
        <table class="table" >
            <tr>
                <td><h3>Nombre: </h3></td>
                <td>{{$product->name}}</td>
            </tr>
            <tr>
                <td><h3>Descripcion: </h3></td>
                <td>{{$product->description}}</td>
            </tr>
            <tr>
                <td><h3>Precio: </h3></td>
                <td>{{$product->price}} soles</td>
            </tr>
        </table>
    </div>
    <div class="photo" >
        <img src="/imagenes/photo/{{$product->photo}}" width="64%" height="100%">
    </div>
</div>
<div class="productShop" >
    <button id="btnShop" class="btn btn-primary" ><a class="dropdown-item" href="https://api.whatsapp.com/send?phone=51992258052&text=Informacion"><img src="/imagenes/photo/whatsapp.png" alt="..." width="45" height="35">Comprar</a></button>
</div>
@endsection
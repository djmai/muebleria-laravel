@extends('Template.template')
@section('title','Productos Por Cateogria')
@section('style')
<link href="{{ asset('css/productByCategory.css') }}" rel="stylesheet">
@endsection
@section('conteiner')
<div class="linkCategories">
    <a href="{{route('category.list')}}" ><button id="btnCategory" class="btn btn-primary" >Volver a las categorias</button></a>
</div>  
<div class="conteinerProducts" >
@foreach($product as $productIterate)
    <div class="product" >
        <table class="tableProduct">
            <tr>
                <th colspan="2" ><img src="/imagenes/photo/{{$productIterate->photo}}" width="220px" height="220px"></th>
            </tr>
            <tr>
                <td cons>{{$productIterate->name}}</td>
            </tr>
            <tr>
                <td>{{$productIterate->price}} soles</td>
            </tr>
            <tr>
                <td colspan="2" ><a href="{{route('product.detail',$productIterate->id)}}" ><button id="btnCategory" class="btn btn-primary" >Ver Detalles</button></a></td>
            </tr>
        </table>
    </div>
@endforeach
</div>
@endsection
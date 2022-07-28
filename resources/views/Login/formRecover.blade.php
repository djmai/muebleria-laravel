@extends('Template.templatelogin')
@section('title','formulario de Recuperacion')
@section('style')
<link href="{{ asset('css/formRecover.css') }}" rel="stylesheet">
@endsection
@section('conteiner')
<div>
</div>
<div class="register" >
    <form method="post" action="{{route('recover.validar')}}" >
        @csrf
        <table class="table" >
            <tr>
                <td><img src="/imagenes/photo/mail.png"  width="50px"></td>
                <td><input class="inputClass" type="email" name="emailForm" placeholder="Digite su correo" ></td>
            </tr>
            <tr>
                <td colspan="2"><button  id="btnBuscar" class="btn btn-primary" type="submit" >Buscar</button></td>
            </tr>
        </table>
    </form>
</div>
<div class="conteinerLinks" >
    <a href="{{route('login')}}">Volver al Login</a>
    <p>La contraseña nueva llegará a tu correo en el plazo de una semama</p>
</div>
@endsection()

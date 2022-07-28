@extends('Template.templateLogin')
@section('title','Login')
@section('style')
<link href="{{ asset('css/login.css') }}" rel="stylesheet">
@endsection
@section('conteiner')
<div class="login">
    <form method="post" action="{{route('login.validar')}}" >
    @csrf
        <table class="table">
            <tr>
                <td class="tdImg" ><img src="/imagenes/photo/mail.png" width="50px"></td>
                <td><input class="inputClass" type="text" name="emailForm" placeholder="Email"></td>
            </tr>
            <tr>
                <td class="tdImg" ><img src="/imagenes/photo/password.png" width="50px"></td>
                <td><input class="inputClass" type="password" name="passwordForm" placeholder="Contraseña" ></td>
            </tr>
            <tr>
                <td colspan="2" ><button  id="btnEnviar" class="btn btn-primary" type="submit" >Ingresar</button></td>
            </tr>
        </table>
    </form>
</div>
<div class="conteinerLinks" >
    <lu>
        <p>{{$mensaje}}</p>
        <li><a href="{{route('login.formRecover')}}" >¿Olvidaste tu contraseña?</a></li>
        <li><a href="{{route('Register.formulario')}}" >Registrarse</a></li> 
    </lu>
</div>
@endsection
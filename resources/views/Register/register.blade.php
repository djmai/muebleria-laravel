@extends('Template.templateLogin')
@section('title','Registro')
@section('style')
<link href="{{ asset('css/register.css') }}" rel="stylesheet">
@endsection
@section('conteiner')
<div class="register" >
    <form method="post" action="{{route('Register.validar')}}" >
    @csrf
        <legend><strong>INGRESE SUS DATOS</strong></legend>
        <table class="table" >
            <tr>
                <td>Nombre: </td>
                <td><input class="inputClass" type="text" name="nameForm"></td>
            </tr>
            <tr>
                <td>Correo: </td>
                <td><input class="inputClass" type="text" name="emailForm"></td>
            </tr>
            <tr>
                <td>Contraseña: </td>
                <td><input class="inputClass" type="password" name="passwordForm"></td>
            </tr>
            <tr>
                <td colspan="2" ><button class="btn btn-primary" type="submit" >Registrar</button></td>
            </tr>
        </table>
    </form>
</div>
<div class="conteinerLinks" >
    {{$mensaje}}
    <a href="{{route('login')}}" >Ir al login</a>
</div>
@endsection()
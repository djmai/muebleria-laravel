<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class registerController extends Controller
{ 
    public $mensaje = '';
    public function index(){
        return view('Register.register')->with('mensaje',$this->mensaje);
    }

    public function validarRegistrar(Request $request){
        if(trim($request['nameForm']==0 && $request['emailForm']==0 && $request['passwordForm']==0 )){
            $this->mensaje = "Ingrese datos";
            return view('Register.register')->with('mensaje',$this->mensaje);
        }
        else{
            $validate = DB::table('users')->where('email','=',$request->emailForm)->get();
            if(!empty($validate[0])){
                $this->mensaje = 'Ya esta registrado ese correo';
                return view('Register.register')->with('mensaje',$this->mensaje);
            }else{
                $user = new User;
                $user-> name = $request-> nameForm;
                $user-> email = $request-> emailForm;
                $user-> password = $request-> passwordForm; 
                $user->save();
                $this->mensaje = '';
                return view('Login.login')->with('mensaje',$this->mensaje);
                }
            }
    }
}

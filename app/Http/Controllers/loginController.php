<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\isEmpty;

class loginController extends Controller
{
    public $mensaje = '';
    public function validar(request $request){
        if(trim($request['emailForm'])==0  && trim($request['passwordForm'])==0){
            $this->mensaje = 'Relleno los datos';
            return view('Login.login')->with('mensaje',$this->mensaje);
        }else{
            $validate = DB::table('users')->where('email','=',$request->emailForm)->get();
            if(empty($validate[0])){
                $this->mensaje = 'No existe este correo';
                return view('Login.login')->with('mensaje',$this->mensaje);
            }else{
                if($validate[0]->email==$request->emailForm && $validate[0]->password==$request->passwordForm){
                    $request->session()->put('user', $request->emailForm);
                    $user1 = session('user');
                    return redirect()->route('main');
                }
                $this->mensaje = 'El correo o contraseña es incorrecto';
                return view('Login.login')->with('mensaje',$this->mensaje);
            }
        }
    }

    public function formRecover(){
        return view('Login.formRecover');
    }

    public function mailValidar(Request $request){
        $verificar = DB::table('users')->where('email','=',$request->emailForm)->get();
        if(!empty($verificar[0])){
            $details=[
                'title' => 'Correo de parte de kevin',
                'body' =>'Este es un ejemplo',
            ];
            $sendA = new SendMail($details);
            Mail::to($request->emailForm)->send($sendA);
            return view('Login.login');
        }else{
            return redirect()->route('login.formRecover');
        }
        
    }
    public function closeSession(Request $request){
        $request->session()->forget('user');
        return redirect()->route('main');
    }

}

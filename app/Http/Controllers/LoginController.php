<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;

class LoginController extends Controller
{
    public function login(){
//        Sentinel::register([
//            'dni'    => '34794239',
//            'email'    => 'test@example.com',
//            'password' => '12345',
//            'first_name' => 'Nicolas',
//            'last_name' => 'Sabater',
//        ]);
        return view('login');
    }

    public function postLogin(Request $request){
        $login = $request->request;
        Sentinel::authenticate(
            [
                'login' => $login->get('login'),
                'password' => $login->get('password'),
            ]);
        if(!Sentinel::check())
            flash('dni o contrase&ntilde;a incorrecta', 'error');

        if(!is_null($login->get('remember')))
            Sentinel::loginAndRemember(Sentinel::getUser());

        return redirect(route('home'));
    }

    public function logOut(Request $request){
        Sentinel::logout();
        $request->session()->flush();

        return redirect(route('login'));
    }
}

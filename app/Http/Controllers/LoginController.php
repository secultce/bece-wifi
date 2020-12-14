<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login');
    }

    public function enviar(Request $request){
        //dd($request->all());
        $users = User::get();
        $email = $request->email;
        $password = $request->password;
        $userEmail = $users[0]['email'];
        $userPassword = $users[0]['password'];
        $pass = md5($password);
        if($email == $userEmail && $pass == $userPassword ){
            return Redirect::to('visitors');
        }else{
            $request->session()->flash('alert-danger', 'Login ou senha não são válidos.');
            return redirect('/login');
        }
        
    }
}

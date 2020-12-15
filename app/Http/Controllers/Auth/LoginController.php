<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/visitors';
    


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login');
    }

    public function enviar(Request $request)
    {
        //dd($request->all());
        $users = User::get();
        $email = $request->email;
        $password = $request->password;
        $userEmail = $users[0]['email'];
        $userPassword = $users[0]['password'];
        $pass = md5($password);
        if ($email == $userEmail && $pass == $userPassword) {
            return Redirect::to('visitors');
        } else {
            $request->session()->flash('alert-danger', 'Login ou senha não são válidos.');
            return redirect('/login');
        }
    }
}

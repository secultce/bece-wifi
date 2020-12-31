<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::get();

        return view('user', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User;

        $email = $request->input('email');

        $p1 = $request->input('password');
        $p2 = $request->input('password_verify');

        //Verificadndo password
        if ( $p1 != $p2 ){
            return Redirect::to('/users?status=error&message=Senhas informadas não conferem');
        }

        $userByEmail = User::where('email', $email)->get();

        //Verificadndo email
        if (count($userByEmail) > 0) {
             return Redirect::to('/users?status=error&message=Já existe um usuario cadastrado com este email!');
        }

       //Cadastrando novo usuario
        $user->create([
            'name' => $request->input('name'),
            'email' =>  $request->input('email'),
            'password' =>  Hash::make($request->input('password')),
        ]);

        return Redirect::to('/users?status=success&message=Usuario cadastrado com sucesso!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('user.profile', [
            'user' => User::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        $user->update($request->all());

        return redirect()->route('user.index')
                        ->with('success','User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('user.index')
            ->with('success', 'User deleted successfully');
    }
}

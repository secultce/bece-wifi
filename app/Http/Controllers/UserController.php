<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

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
        //return view('user');
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

        $clean_CPF = clean_CPF($request->input('cpf'));

        $userExists = User::where('cpf', $clean_CPF)->get();

        if (!count($userExists) > 0) {
            $user->create([
                'name' => $request->input('name'),
                'cpf' => $clean_CPF
            ]);

            return Redirect::to('/user?status=success&message=Usuário cadastrado com sucesso!');
        }

        return Redirect::to('/user?status=error&message=Já existe um Usuário com este CPF cadastrado!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(Request $request, $id)
    {
        $clean_CPF = clean_CPF($request->input('cpf'));

        $usersExists = User::where('cpf', $clean_CPF)->get();

        if (!count($usersExists) > 0) {
            User::where('id', $id)->update([
                'name' => $request->input('name'),
                'cpf' => $clean_CPF
            ]);

            return Redirect::to('/users?status=success&message=Usuário atualizado com sucesso!');
        }

        return Redirect::to('/users?status=error&message=Já existe um usuário usando este CPF!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

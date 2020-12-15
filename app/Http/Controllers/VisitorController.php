<?php

namespace App\Http\Controllers;

use App\Visitor;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class VisitorController extends Controller
{   

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $visitors = Visitor::get();

        return view('visitor', ['visitors' => $visitors]);
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
        $visitor = new Visitor;

        $clean_CPF = clean_CPF($request->input('cpf'));

        $visitorExists = Visitor::where('cpf', $clean_CPF)->get();

        if (!count($visitorExists) > 0) {
            $visitor->create([
                'name' => $request->input('name'),
                'cpf' => $clean_CPF
            ]);

            return Redirect::to('/visitors?status=success&message=Visitante cadastrado com sucesso!');
        }

        return Redirect::to('/visitors?status=error&message=Já existe um visitante com este CPF cadastrado!');
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

        //Validar Id
        $visitorExists = Visitor::where('id', $id)->get();
        if (count($visitorExists) == 0) {
            return Redirect::to('/visitors?status=error&message=Visitante não encontrado!');    
        }

        //Validar CPF
        $clean_CPF = clean_CPF($request->input('cpf'));
        $visitorCPFExists = Visitor::where('cpf', $clean_CPF)->get();
        if (count($visitorCPFExists) > 0 && $visitorCPFExists[0]->id != $id) {
            return Redirect::to('/visitors?status=error&message= O CPF informado já existe no sistema!'); 
        }       
        
        //Update
        Visitor::where('id', $id)->update([
            'name' => $request->input('name'),
            'cpf' => $clean_CPF
        ]);

        return Redirect::to('/visitors?status=success&message=Visitante atualizado com sucesso!');
        
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

<?php

namespace App\Http\Controllers;

use App\Visitor;
use App\Voucher;

use Illuminate\Auth\Access\Response;
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

    public function voucher(Request $request, $id) {
        $voucherAvailable = Voucher::where('active', true)
            ->where('visitor_id', null)
            ->limit(1)
            ->get();

        if (count($voucherAvailable) > 0) {
            Voucher::where('id', $voucherAvailable[0]['id'])
                ->update([
                    'active' => false,
                    'visitor_id' => $id
                ]);

            return response()->json([
                'message' => 'Voucher gerado com sucesso!',
                'voucher' => $voucherAvailable
            ]);
        } 

        return response()->json([
            'message' => 'Nenhum voucher disponível!',
            'voucher' => []
        ]);
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
        $clean_CPF = clean_CPF($request->input('cpf'));

        $visitorExists = Visitor::where('cpf', $clean_CPF)->get();

        if (!count($visitorExists) > 0) {
            Visitor::where('id', $id)->update([
                'name' => $request->input('name'),
                'cpf' => $clean_CPF
            ]);

            return Redirect::to('/visitors?status=success&message=Visitante atualizado com sucesso!');
        }

        return Redirect::to('/visitors?status=error&message=Já existe um visitante usando este CPF!');
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

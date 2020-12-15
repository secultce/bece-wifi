<?php

namespace App\Http\Controllers;

use App\Voucher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class VoucherController extends Controller
{
    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vouchers = Voucher::with('visitor')->get();

        return view('voucher', ['vouchers' => $vouchers]);
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
        if(!$request->hasfile('vouchers')) {
            return Redirect::to("/vouchers?status=error&message=Arquivo invalido ou nao enviado!");
        }

        //CAMINHO DO ARQUIVO UPLOAD
        $filePathTmp = $request->file('vouchers')->getPathName();
        
        //ABRIR ARQUIVO 
        $arquivo = fopen($filePathTmp, 'r');

        //LENDO HEADER
        $headerFile = "";
        for($i=0;$i<7;$i++) $headerFile = fgets($arquivo, 1024);
                
        //CADASTRANDO VOUCHERS
        $counter = 0;
        while(!feof($arquivo)) {
            $txtVoucher = preg_replace("/[^a-zA-Z0-9]+/", "", fgets($arquivo, 1024));
            
            $voucherExists = Voucher::where('voucher', $txtVoucher)->get();
            if (count($voucherExists) == 0) {
                $counter ++;
                $voucher = new Voucher;
                $voucher->create([
                    'voucher' => $txtVoucher,
                    'active' => true
                ]);
            }
        }

        // Fecha arquivo aberto
        fclose($arquivo);

        if ($counter == 0) {
            return Redirect::to("/vouchers?status=error&message= Nenhum voucher cadastrado!");
        }

        return Redirect::to("/vouchers?status=success&message= {$counter} Voucher(s) cadastrado(s) com sucesso!");
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
        //
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

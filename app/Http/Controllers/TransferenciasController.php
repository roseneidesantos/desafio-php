<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransferenciasController extends Controller
{
    public function transferir(Request $request){
        dd($request->all());
        
    }
}

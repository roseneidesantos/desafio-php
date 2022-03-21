<?php

namespace App\Http\Controllers;

use App\Models\transferencias;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


class TransferenciasController extends Controller
{
    public function index(){
        $transf = transferencias::all();
        return view('transferencias', compact('transf')); 
    }

    public function show($cpf){
        // $transf = User::findOrFail($cpf);

        // return view('transferencias', ['transf'=>$transf]);

        // $transf = User::pluck('name', 'cpf');
        // return view('transfrencias')->with('transf', $transf);
    }
}

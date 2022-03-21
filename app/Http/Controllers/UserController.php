<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{   
    public function search(Request $request){

        $cpf = $_GET['cpf'];
    
        $data = User::where('cpf', $cpf)->get();
        return response()->json(["data" => $data], 200);
        // return view('confirma_transf', compact('data')); 
        // http://localhost:8000/search?cpf=70000611115       
    }
}

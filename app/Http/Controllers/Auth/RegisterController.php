<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        if($request->method()=='GET'){
            return view('auth.register');
        }
        $request->validate([
            
            'cellphone'=>'required|iran_mobile'
        ]);
    }
}

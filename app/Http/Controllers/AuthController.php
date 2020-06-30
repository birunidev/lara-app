<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function getSignUpPage(Request $request){
        return view('signup');
    }

    public function submitForm(Request $request){
        
        
        $first_name = $request['first_name'];
        $last_name = $request['last_name'];
        $full_name = $first_name . ' ' . $last_name;

        return view('success', ['name' => $full_name]);
    }
}

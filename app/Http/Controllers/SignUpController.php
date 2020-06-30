<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignUpController extends Controller
{
    //
    public function getSignUpPage(Request $request){
        return view('signup');
    }

    public function submitForm(Request $request){
        
        
        $first_name = $request['first_name'];
        $last_name = $request['last_name'];
        $full_name = $first_name . ' ' . $last_name;

        return redirect()->action('WelcomeController@getWelcomePage', ['full_name' => $full_name ]);
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShowController extends Controller
{
    public function show_auth_user(){
        // return Auth::user()->id;
        return Auth::user()->name;
    }

    public function check_auth_user(){
        if(Auth::check()){
            return 'You are Authenticated user';
        }
        else{
            return 'You are Unauthenticated user';
        }
    }
}

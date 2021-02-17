<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterControlledr extends Controller
{
    function index(){
        return view('auth.register');
    }
}

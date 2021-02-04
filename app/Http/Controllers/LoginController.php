<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller{

    public function loginWithPost(Request $request)
    {
        // $request->input('username')." ".$request->input('password');
        return $request->input('username')." ".$request->input('password')." ini dari post";
    }

    public function loginWithGet(Request $request)
    {
        return $request->input('username')." ".$request->input('password')." ini dari get";
    }
}
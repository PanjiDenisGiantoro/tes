<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    //
    public function index()
    {
        $name = 'jen';
        $users = array
            ("name" => "Smith jon",
            "email" => "john@gmail.com",
            "phone" => "0998979");
        return view('user', compact('name', 'users'));
    }
}

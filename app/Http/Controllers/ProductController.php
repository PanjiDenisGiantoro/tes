<?php

namespace App\Http\Controllers;

class ProductController extends Controller
{
    public function index()
    {
        $fruits = array('Mango', 'orange', 'banana');
        return view('welcome', compact('fruits'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;

class FluentController extends Controller
{
    //
    public function index()
    {
        echo '<h1>fluent</h1>';
        $slice = Str::of('welcome to my youtube')->after('welcome to');
        echo $slice . '<br>';

        $slice2 = Str::of('App\Http\Controllers\controller')->afterLast('\\');
        echo $slice2 . '<br>';

        $string = Str::of('hello')->append('world');
        echo $string . '<br>';

        $result = Str::of('LARAVEL 9')->lower();
        echo $result . '<br>';

        $replaced = Str::of('laravel 7.0')->replace('7.0', '8.0');
        echo $replaced . '<br>';

        $converted = Str::of('this is a title')->title();
        echo $converted;

        $slug = Str::of('laravel 8 framework')->slug('-');
        echo $slug . '<br>';

        $str = Str::of('laravel framework')->substr(8, 5);
        echo $str . '<br>';

        $str2 = Str::of('/Laravel8')->trim('/');
        echo $str2;
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    //
    public function welcome(){
        return view('welcome');
    }

    public function suma(){
        $a = 10;
        $b = 20;

        return "La fucking suma es: ".$a+$b;
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Venta;
use App\Models\VentaDetalle;



class VentaController extends Controller
{
    //
    public function create(){
        $productos = Producto::all();
        return view('ventas.create', compact('productos'));
        //return view('ventas.create');
    }

    public function store(){
        return ("todo ok");
    }
}

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

    public function store( Request $request ){
        //Guardar Cabecera
        $venta = Venta::create([
            'fecha' => $request->fecha,
            'cliente' => $request->cliente,
        ]);

        //Guardar los detalles
        foreach ($request->detalles as $detalle) {
            $venta->detalles()->create([
                'id_producto' => $detalle['id_producto'],
                'cantidad' => $detalle['cantidad'],
                'precio' => $detalle['precio'],
                'monto' => $detalle['monto'],
            ]);
        }
        return response()->json(['success'=>true, 'venta_id'=> $venta->id]);

    }
}

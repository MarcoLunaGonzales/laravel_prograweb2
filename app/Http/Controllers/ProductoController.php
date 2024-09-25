<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    //
    public function index(){
        $productos = Producto::all();
        return view('productos.lista', compact('productos'));
    }

    public function create(){
        return view('productos.create');
    }

    public function store(Request $request){
        // $request->validate([
        //     'nombre'=>'required',
        //     'descripcion'=>'required',
        //     'precio'=>'required|numeric',
        //     'cantidad'=>'required|integer',
        //     'cantidad'=>'required|boolean',
        // ]);

        Producto::create($request->all());

        return redirect()->route('productos.index')->with('success','Producto Creado Correctamente!');
    }

    public function edit($id){
        $producto = Producto::find($id);
        return view('productos.edit', compact('producto'));
    }

    public function update(Request $request, $id){
        $producto = Producto::find($id);
        $producto->update($request->all()); 

        return redirect()->route('productos.index')->with('success','Producto Editado correctamente!');
    }

    public function destroy($id){
        $producto = Producto::findOrFail($id);
        $producto->delete();

        return redirect()->route('productos.index')->with('success','Producto Eliminado correctamente!');

    }

    
}

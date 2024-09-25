@extends('layouts.app')

@section('contenido_app')


<div class="card">
    <div class="card-body">
        <div class="card-title">
            <h4 class="mb-0">Listado de Productos</h4>
        </div>
        <hr/>
        <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($productos as $producto)
                    <tr>
                        <td>{{ $producto->id }}</td>
                        <td>{{ $producto->nombre }}</td>
                        <td>{{ $producto->descripcion }}</td>
                        <td>{{ $producto->precio }}</td>
                        <td>{{ $producto->cantidad }}</td>
                        <td>{{ $producto->estado }}</td>
                        <td>
                            <a href="{{ route('productos.edit', $producto->id) }}">
                                <div class="icon-base">
                                    <i class="fadeIn animated bx bx-edit-alt"></i>
                                </div>
                            </a>
                            <a href="{{ route('productos.destroy', $producto->id) }}">
                                <div class="icon-base">
                                    <i class="fadeIn animated bx bx-trash-alt"></i>
                                </div>
                            </a>
                        </td>

                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>

<a href="{{ route('productos.create') }}" class="btn btn-success" >
Crear Producto
</a>


@endsection

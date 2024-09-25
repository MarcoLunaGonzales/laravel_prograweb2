@extends('layouts.app')

@section('contenido_app')


<div class="card radius-15">
    <div class="card-body">
        <div class="card-title">
            <h4 class="mb-0">Editar Producto</h4>
        </div>
        <hr/>
        <form method="POST" action="{{ route('productos.update', $producto->id) }}">
            @csrf
            @method('PUT')
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationCustom01">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $producto->nombre }}" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="validationCustom02">Descripcion</label>
                    <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{ $producto->descripcion }}" required>
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationCustom01">Precio</label>
                    <input type="number" step="0.01" min="1" max="100" class="form-control" id="precio" name="precio" value="{{ $producto->precio }}" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="validationCustom02">Cantidad</label>
                    <input type="number" step="1" min="0" max="100" class="form-control" id="cantidad" name="cantidad" value="{{ $producto->cantidad }}" required>
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationCustom01">Estado</label>
                    <select class="form-control" id="estado" name="estado">
                        <option value="0">Inactivo</option>
                        <option value="1" selected>Activo
                        </option>
                    </select>
                </div>
            </div>

            <button type="submit" class="btn btn-primary" >Editar Producto</button>
        </form>

    </div>
</div>


@endsection
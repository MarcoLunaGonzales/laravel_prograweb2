@extends('layouts.app')



@section('contenido_app')

<form id="ventaForm">
    @csrf

    <h3>Datos de la Venta</h3>
    <label for="fecha">Fecha:</label>
    <input type="date" name="fecha" id="fecha" required>

    <label for="cliente">Cliente:</label>
    <input type="text" name="cliente" id="cliente" required>


    <h3>Detalle de la Venta</h3>
    
    <table id="detallesTable">
        <thead>
            <tr>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Monto</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <select name="id_producto[]" class="producto">
                        <option value="">Seleccionar Producto</option>
                        @foreach($productos as $producto)
                            <option value="{{ $producto->id }}" data-precio={{ $producto->precio }} >{{ $producto->nombre }}
                            </option>
                        @endforeach
                    </select>
                </td>
                <td>
                <input type="number" name="cantidad[]" class="cantidad" required>
                </td>
                <td>
                    <input type="number" step="0.01" name="precio[]" class="precio" readonly required>
                </td>
                <td>
                    <input type="number" step="0.01" name="monto[]" class="monto" readonly required>
                </td>
                <td>
                    <button type="button" class="removeRow">Borrar Producto</button>
                </td>

            </tr>
        </tbody>
    </table>    
    <button type="button" id="addRow">Adicionar Productos a la Venta</button>

    <button type="submit">Guardar Venta</button>
</form>


@endsection
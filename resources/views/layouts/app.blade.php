<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Syndash - Bootstrap4 Admin Template</title>
    <!--favicon-->
    <link rel="icon" href="{{ asset('/images/favicon-32x32.png') }}" type="image/png" />
    <!--plugins-->
    <link href="{{ asset('/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
    <link href="{{ asset('/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
    <link href="{{ asset('/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
    <!-- loader-->
    <link href="{{ asset('/css/pace.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('/js/pace.min.js') }}"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}" />
    <!-- Icons CSS -->
    <link rel="stylesheet" href="{{ asset('/css/icons.css') }}" />
    <!-- App CSS -->
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/dark-sidebar.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/dark-theme.css') }}" />
    <!--Data Tables -->
    <link href="{{ asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css">
</head>

<body>
    <!-- wrapper -->
    <div class="wrapper">
        <!--sidebar-wrapper-->
        <div class="sidebar-wrapper" data-simplebar="true">
            <div class="sidebar-header">
                <div class="">
                    <img src="{{ asset('/images/logo-icon.png') }}" class="logo-icon-2" alt="" />
                </div>
                <div>
                    <h4 class="logo-text">App UPDS</h4>
                </div>
                <a href="javascript:;" class="toggle-btn ml-auto"> <i class="bx bx-menu"></i>
                </a>
            </div>


            <!--navigation-->
            <ul class="metismenu" id="menu">
                <li>
                    <!--a href="javascript:;" class="has-arrow">
                        <div class="parent-icon icon-color-1"><i class="bx bx-home-alt"></i>
                        </div>
                        <div class="menu-title">Datos Generales</div
                    </a-->
                    <ul>
                        <li> <a href="index.html"><i class="bx bx-right-arrow-alt"></i>Productos</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-label">Transacciones</li>
                <li>
                    <a href="{{ route('productos.index') }}">
                        <div class="parent-icon icon-color-2"><i class="bx bx-envelope"></i>
                        </div>
                        <div class="menu-title">Productos</div>
                    </a>
                </li>
            </ul>
            <!--end navigation-->

            
        </div>
        <!--end sidebar-wrapper-->
        <!--header-->
        <header class="top-header">
            <nav class="navbar navbar-expand">
                <div class="left-topbar d-flex align-items-center">
                    <a href="javascript:;" class="toggle-btn">  <i class="bx bx-menu"></i>
                    </a>
                </div>
                <div class="flex-grow-1 search-bar">
                    <div class="input-group">
                        <div class="input-group-prepend search-arrow-back">
                            <button class="btn btn-search-back" type="button"><i class="bx bx-arrow-back"></i>
                            </button>
                        </div>
                        <input type="text" class="form-control" placeholder="search" />
                        <div class="input-group-append">
                            <button class="btn btn-search" type="button"><i class="lni lni-search-alt"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="right-topbar ml-auto">
                    <ul class="navbar-nav">
                        <li class="nav-item search-btn-mobile">
                            <a class="nav-link position-relative" href="javascript:;">  <i class="bx bx-search vertical-align-middle"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown dropdown-lg">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="javascript:;" data-toggle="dropdown">   <i class="bx bx-bell vertical-align-middle"></i>
                                <span class="msg-count">8</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="javascript:;">
                                    <div class="msg-header">
                                        <h6 class="msg-header-title">8 New</h6>
                                        <p class="msg-header-subtitle">Application Notifications</p>
                                    </div>
                                </a>
                                <a href="javascript:;">
                                    <div class="text-center msg-footer">View All Notifications</div>
                                </a>
                            </div>
                        </li>
                        <li class="nav-item dropdown dropdown-user-profile">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-toggle="dropdown">
                                <div class="media user-box align-items-center">
                                    <div class="media-body user-info">
                                        <p class="user-name mb-0">Jessica Doe</p>
                                        <p class="designattion mb-0">Available</p>
                                    </div>
                                    <img src="https://via.placeholder.com/110x110" class="user-img" alt="user avatar">
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right"> <a class="dropdown-item" href="javascript:;"><i
                                        class="bx bx-user"></i><span>Profile</span></a>
                                <div class="dropdown-divider mb-0"></div>   <a class="dropdown-item" href="javascript:;"><i
                                        class="bx bx-power-off"></i><span>Logout</span></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!--end header-->



        <!--page-wrapper-->
        <div class="page-wrapper">
            <!--page-content-wrapper-->
            <div class="page-content-wrapper">
                <div class="page-content">
                    @yield('contenido_app')
                </div>
            </div>
            <!--end page-content-wrapper-->
        </div>
        <!--end page-wrapper-->
        



        <!--start overlay-->
        <div class="overlay toggle-btn-mobile"></div>
        <!--end overlay-->
        <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->
        <!--footer -->
        <div class="footer">
            <p class="mb-0">Syndash @2020 | Developed By : <a href="javascript:;">codervent</a>
            </p>
        </div>
        <!-- end footer -->
    </div>
    <!-- end wrapper -->
    <!--start switcher-->
    <div class="switcher-wrapper">
        <div class="switcher-btn"> <i class='bx bx-cog bx-spin'></i>
        </div>
        <div class="switcher-body">
            <h5 class="mb-0 text-uppercase">Theme Customizer</h5>
            <hr/>
            <h6 class="mb-0">Theme Styles</h6>
            <hr/>
            <div class="d-flex align-items-center justify-content-between">
                <div class="custom-control custom-radio">
                    <input type="radio" id="darkmode" name="customRadio" class="custom-control-input">
                    <label class="custom-control-label" for="darkmode">Dark Mode</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="lightmode" name="customRadio" checked class="custom-control-input">
                    <label class="custom-control-label" for="lightmode">Light Mode</label>
                </div>
            </div>
            <hr/>
            <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="DarkSidebar">
                <label class="custom-control-label" for="DarkSidebar">Dark Sidebar</label>
            </div>
            <hr/>
            <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="ColorLessIcons">
                <label class="custom-control-label" for="ColorLessIcons">Color Less Icons</label>
            </div>
        </div>
    </div>
    <!--end switcher-->
    <!-- JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('/js/jquery.min.js') }}"></script>
    <script src="{{ asset('/js/popper.min.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
    <!--plugins-->
    <script src="{{ asset('/plugins/simplebar/js/simplebar.min.js') }}"></script>
    <script src="{{ asset('/plugins/metismenu/js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
    <!-- App JS -->
    <script src="{{ asset('/js/app.js') }}"></script>
    <!--Data Tables js-->
    <script src="{{ asset('assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>

    <!--script>
        $(document).ready(function () {
            //Default data table
            $('#example').DataTable();
            var table = $('#example2').DataTable({
                lengthChange: false,
                buttons: ['copy', 'excel', 'pdf', 'print', 'colvis']
            });
            table.buttons().container().appendTo('#example2_wrapper .col-md-6:eq(0)');
        });
    </script-->

    <!--Aca Vienen las funciones para las ventas-->
    <script>
    $(document).ready(function(){
        //Funcion para adicionar una fila de productos en la venta
        $('#addRow').click(function(){
            $('#detallesTable tbody').append(`
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
            `);
        });
        //Fin Funcion adicionar productos

        //Funcion para eliminar fila
        $(document).on('click','.removeRow', function(){
            $(this).closest('tr').remove();

        });
        //Fin Funcion eliminar fila

        //Esta funcion es para cambiar el precio del producto
        $(document).on('change','.producto', function(){
            const $fila = $(this).closest('tr');
            const precio = $(this).find('option:selected').data('precio');
            $fila.find('.precio').val(precio);
            actualizarMonto($fila);
        });
        //Fin funcion cambiar precio

        //Esta funcion es para cambiar el monto del producto
        $(document).on('input', '.cantidad', function(){
            const $fila = $(this).closest('tr');
            actualizarMonto($fila);
        });
        //Fin funcion cambiar

        //Funcion para actualizar el monto del producto
        function actualizarMonto($fila){
            const cantidad = parseFloat($fila.find('.cantidad').val()) || 0;
            const precio = parseFloat($fila.find('.precio').val()) || 0;
            const monto = cantidad * precio ;
            $fila.find('.monto').val(monto.toFixed(2));
        }
        //Fin funcion para actulizar el monto del producto

        //Enviar formulario con Ajax
        /*$('#ventaForm').submit(function (e){
            e.preventDefault();

            let detalles = [];
            $('#detallesTable tbody tr').each(function (){
                detalles.push({
                    id_producto: $(this).find('.producto').val();
                    cantidad: $(this).find('.cantidad').val();
                    precio: $(this).find('.precio').val();
                });
            });

            $.ajax({
                url: '{{ route("ventas.store") }}';
                method: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    fecha: $('#fecha').val(),
                    cliente: $('#cliente').val();
                    detalles: detalles,
                },
                success: function (response) {
                    alert('La Venta fue guardada satisfactoriamente');
                    $('#ventaForm').[0].reset();
                    $('#detallesTable tbody').empty();
                },
                error: function (error){
                    console.error(error);
                }
            });
        });*/
        //Fin enviar formulario ajax

    });
    </script>
    <!--Fin funciones Ventas-->

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Hola</title>
</head>

<body>
<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow w-100">
    <a href="{{route('pedidos.index')}}" class="navbar-brand bg-dark col-md-3 col-lg-2 mr-3 px-3">Panel de administrador</a>
    <button class=" navbar-toggler position-absolute d-md-none collapsed bg-dark" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</nav>
<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="sidebar-sticky pt-3">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link btn btn-success m-3 text-white"  href="{{route('pedidos.create')}}">
                        Nuevo Pedido
                        </a>
                        
                    </li>
                    <li class="nav-item">
                        <a class="nav-link "  href="{{route('pedidos.index')}}">
                         Pedidos
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link "  href="{{route('productos.index')}}">
                         Productos
                        </a>
                    </li>
                </ul>
                </h6>
                <ul class="nav flex-column mb-2">
                    <li class="nav-item">
                        <a class="nav-link "  href="{{route('clientes.index')}}">
                           Clientes Frecuentes
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link "  href="{{route('empleados.index')}}">
                           Vendedores
                        </a>
                    </li>

                </ul>
            </div>
        </nav>

     
    </div>
</div>
@yield('nav')
    
</body>

</html>
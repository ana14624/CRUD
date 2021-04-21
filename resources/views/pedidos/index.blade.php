@extends("layouts.plantilla")

@section('nav')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h2>Pedidos</h2>
            </div>
            <div class="table-responsive">
                <table class="table table-striped table-sm text-center">
                    <thead>
                        <tr>
                        <th>Estado</th>
                        <th>Fecha</th>
                        <th>Fecha Envio</th>
                        <th>Codigo de Cliente</th>
                        <th>Codigo de Vendedor</th>
                        <th>Codigo Producto</th>
                        <th>Cantidad</th>
                        <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($pedidos as $pedidos )
                            <tr>
                            <td>{{$pedidos -> estadopedido}}</td>
                            <td>{{$pedidos -> fechapedido}}</td>
                            <td>{{$pedidos -> fechaenvio}}</td>
                            <td><a href="{{route('clientes.show', $pedidos -> cliente_id)}}">CC-{{$pedidos -> cliente_id}}</a></td>
                            <td><a href="{{route('empleados.show', $pedidos -> vendedor_id)}}">VC-{{$pedidos -> vendedor_id}}</a></td>
                            <td><a href="{{route('productos.show', $pedidos -> codigo_producto)}}">CP-{{$pedidos -> codigo_producto}}</a></td>
                            <td>{{$pedidos->cantidad}}</td>
                            <td><a href="{{route('pedidos.edit', $pedidos-> id)}}"><strong>Ver mas</strong> </a></td>
                            </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </main>
@endsection






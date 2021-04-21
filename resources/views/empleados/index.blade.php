@extends("layouts.plantilla")

@section('nav')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h2>Vendedores</h2>
                <a class="btn btn-info"  href="{{route('empleados.create')}}"> Nuevo Empleado</a>
            </div>
            
            <div class="table-responsive">
                <table class="table table-striped table-sm text-center">
                    <thead>
                        <tr>
                        <th>Codigo</th>
                        <th>Nombre</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($empleados as $empleados )
                            <tr>
                            <td>VC-{{$empleados-> id}}</td>
                            <td>{{$empleados -> nombre}}</td>
                            <td>{{$empleados -> apellido_paterno}}</td>
                            <td>{{$empleados -> apellido_materno}}</td>
    
                            <td>
                            <a href="{{route('empleados.edit', $empleados-> id)}}"><strong>Ver mas</strong> </a>
                             </td>
                            </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </main>
@endsection






@extends('layouts/plantilla')
@section('TituloPagina', 'crud con Laravel')
@section('contenido')

    <div class="card">
        <h5 class="card-header">Crud con laravel y Mysql</h5>
        <div class="card-body">
            <div class="col-sm-12">
                @if ($mensaje = Session::get('success'))
                    <div class="alert alert-success" role="alert">
                        {{ $mensaje }}
                    </div>
                @endif

            </div>

            <h5 class="card-title">Listado de personas</h5>
            <p>
                <a href="{{ route('personas.create') }}" class="btn btn-primary">
                    <span class="fa-solid fa-user-plus"></span> Agregar nueva persona</a>
            </p>
            <hr>

            <div class="tabLe table-responsive">
                <table class="table table-sm table-bordered">
                    <thead>
                        <th>Apellido materno</th>
                        <th>Apellido paterno</th>
                        <th>Nombre</th>
                        <th>Fecha de nacimiento</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </thead>
                    <tbody>
                        @foreach ($datos as $item)
                            <tr>

                                <td>{{ $item->materno }}</td>
                                <td>{{ $item->paterno }}</td>
                                <td>{{ $item->nombre }}</td>
                                <td>{{ $item->fecha_nacimiento }}</td>
                                <td>
                                    <form action="{{ route('personas.edit', $item->id) }}" method="GET">
                                        <button class="btn btn-warning btn-sm">
                                            <span class="fa-solid fa-user-pen"></span>

                                        </button>
                                    </form>
                                </td>
                                <td>
                                    <form action="{{ route('personas.show', $item->id) }}" method="GET">
                                        <button class="btn btn-danger btn-sm" style="justify-content: center;">
                                            <span class="fa-solid fa-user-xmark"></span>

                                        </button>
                                    </form>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <hr>
                <div class="row">
                    <div class="col-sm-12">
                        {{ $datos->links() }}
                    </div>

                </div>



            </div>
        </div>
    </div>

@endsection

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Listado de Proyectos</h1>
        <a href="{{ route('proyectos.create') }}" class="btn btn-primary">Crear nuevo proyecto</a>
        <a href="{{ route('pdf') }}" target="_blank" class="btn btn-success">Generar Informe PDF</a>
        <a href="{{ route('about') }}" class="btn btn-secondary">Acerca de</a>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre del Proyecto</th>
                    <th>Fuente de Fondos</th>
                    <th>Monto Planificado</th>
                    <th>Monto Patrocinado</th>
                    <th>Monto de Fondos Propios</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($proyectos as $proyecto)
                    <tr>
                        <td>{{ $proyecto->id }}</td>
                        <td>{{ $proyecto->NombreProyecto }}</td>
                        <td>{{ $proyecto->fuenteFondos }}</td>
                        <td>{{ $proyecto->MontoPlanificado }}</td>
                        <td>{{ $proyecto->MontoPatrocinado }}</td>
                        <td>{{ $proyecto->MontoFondosPropios }}</td>
                        <td>
                            <a href="{{ route('proyectos.edit', $proyecto) }}" class="btn btn-primary">Editar</a>
                            <form action="{{ route('proyectos.destroy', $proyecto) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

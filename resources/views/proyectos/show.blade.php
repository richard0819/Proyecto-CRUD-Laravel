@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detalles del Proyecto</h1>

        <table class="table">
            <tbody>
                <tr>
                    <th>ID</th>
                    <td>{{ $proyecto->id }}</td>
                </tr>
                <tr>
                    <th>Nombre del Proyecto</th>
                    <td>{{ $proyecto->NombreProyecto }}</td>
                </tr>
                <tr>
                    <th>Fuente de Fondos</th>
                    <td>{{ $proyecto->fuenteFondos }}</td>
                </tr>
                <tr>
                    <th>Monto Planificado</th>
                    <td>{{ $proyecto->MontoPlanificado }}</td>
                </tr>
                <tr>
                    <th>Monto Patrocinado</th>
                    <td>{{ $proyecto->MontoPatrocinado }}</td>
                </tr>
                <tr>
                    <th>Monto de Fondos Propios</th>
                    <td>{{ $proyecto->MontoFondosPropios }}</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection

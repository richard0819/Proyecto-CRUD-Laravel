@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Crear Proyecto</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('proyectos.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="NombreProyecto" class="form-label">Nombre del Proyecto</label>
                <input type="text" id="NombreProyecto" name="NombreProyecto" class="form-control">
            </div>
            <div class="mb-3">
                <label for="fuenteFondos" class="form-label">Fuente de Fondos</label>
                <input type="text" id="fuenteFondos" name="fuenteFondos" class="form-control">
            </div>
            <div class="mb-3">
                <label for="MontoPlanificado" class="form-label">Monto Planificado</label>
                <input type="number" step="0.01" id="MontoPlanificado" name="MontoPlanificado" class="form-control">
            </div>
            <div class="mb-3">
                <label for="MontoPatrocinado" class="form-label">Monto Patrocinado</label>
                <input type="number" step="0.01" id="MontoPatrocinado" name="MontoPatrocinado" class="form-control">
            </div>
            <div class="mb-3">
                <label for="MontoFondosPropios" class="form-label">Monto de Fondos Propios</label>
                <input type="number" step="0.01" id="MontoFondosPropios" name="MontoFondosPropios" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
@endsection

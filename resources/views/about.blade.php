@extends('layouts.app')

@section('content')
    <div class="container">
    <a href="{{ route('proyectos.index') }}" class="btn btn-primary">Pagina principal</a>
        
        <h1>Acerca de</h1>
        <p><h2>Nombre:</h2> <h3 style="color: green">Ricardo Alfredo Doradea Erazo</h3></p>
        <p><h2>Institución:</h2> <h3 style="color: green">Fondo Solidario para la Familia Microempresaria</h3></p>
    </div>
@endsection

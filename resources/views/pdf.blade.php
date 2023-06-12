<!DOCTYPE html>
<html>
<head>
    <title>Informe de Proyectos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <br>
        <h1>Gobierno de El Salvador</h1>
    <br>
        <h1>Fondo Solidario para la Familia Microempresaria</h1>
    <br>
    <h2>Informe de Proyectos</h2>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre del Proyecto</th>
                <th>Fuente de Fondos</th>
                <th>Monto Planificado</th>
                <th>Monto Patrocinado</th>
                <th>Monto de Fondos Propios</th>
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
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

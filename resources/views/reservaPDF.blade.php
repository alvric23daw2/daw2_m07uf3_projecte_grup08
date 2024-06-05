<!DOCTYPE html>
<html>
<head>
    <title>PDF Reserva</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            font-size: 10px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 6px;
            text-align: left;
        }
        .table-primary {
            background-color: #e9ecef;
        }
    </style>
</head>
<body>
    <h1>PDF Reserva</h1>
    <table>
        <thead>
            <tr class="table-primary">
                <td>Passaport_client</td>
                <td>Codi_vol</td>
                <td>Localitzador</td>
                <td>Num_seient</td>
                <td>Equipatge_ma</td>
                <td>Equipatge_cabina_fins_20kg</td>
                <td>Quantitat_equipatge_mes_20kg</td>
                <td>Tipus_checking</td>
                <td>Preu_vol</td>
                <td>Tipus d'assegurança</td>
            </tr>
        </thead>
        <tbody> 
    @if (isset($dades_reserva))  
        <tr>
            <td>{{ $dades_reserva->Passaport_client }}</td>
            <td>{{ $dades_reserva->Codi_vol }}</td>
            <td>{{ $dades_reserva->Localitzador }}</td>
            <td>{{ $dades_reserva->Num_seient }}</td>
            <td>{{ $dades_reserva->Equipatge_ma }}</td>
            <td>{{ $dades_reserva->Equipatge_cabina_fins_20kg }}</td>
            <td>{{ $dades_reserva->Quantitat_equipatge_mes_20kg }}</td>
            <td>{{ $dades_reserva->Tipus_checking }}</td>
            <td>{{ $dades_reserva->Preu_vol }}</td>
            <td>{{ $dades_reserva->Tipus_assegurança }}</td>
        </tr>
    @endif
</tbody>

    </table>
</body>
</html>

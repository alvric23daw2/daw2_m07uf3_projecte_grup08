<!DOCTYPE html>
<html>
<head>
    <title>Llista d'volss</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            font-size: 10px; /* Ajustar según necesidad */
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
    <h1>PDF Vol</h1>
    <table>
        <thead>
            <tr class="table-primary">
                <td>Codi_vol</td>
                <td>Codi_model</td>
                <td>Ciutat_origen</td>
                <td>Ciutat_desti</td>
                <td>Termina_origen</td>
                <td>Terminal_desti</td>
                <td>Data_sortida</td>
                <td>Data_arribada</td>
                <td>Hora_sortida</td>
                <td>Hora_arribada</td>
                <td>Classe</td>
            </tr>
        </thead>
        <tbody> 
            @if (isset($dades_vols))   
                <tr>
                    <td>{{ $dades_vols->Codi_vol }}</td>
                    <td>{{ $dades_vols->Codi_model }}</td>
                    <td>{{ $dades_vols->Ciutat_origen }}</td>
                    <td>{{ $dades_vols->Ciutat_desti }}</td>
                    <td>{{ $dades_vols->Termina_origen }}</td>
                    <td>{{ $dades_vols->Terminal_desti }}</td>
                    <td>{{ $dades_vols->Data_sortida }}</td>
                    <td>{{ $dades_vols->Data_arribada }}</td>
                    <td>{{ $dades_vols->Hora_sortida }}</td>
                    <td>{{ $dades_vols->Hora_arribada }}</td>
                    <td>{{ $dades_vols->Classe }}</td>
                </tr>
            @else
                @foreach ($dades_vols as $vols)
                <tr>
                    <td>{{ $vols->Codi_vol }}</td>
                    <td>{{ $vols->Codi_model }}</td>
                    <td>{{ $vols->Ciutat_origen }}</td>
                    <td>{{ $vols->Ciutat_desti }}</td>
                    <td>{{ $vols->Termina_origen }}</td>
                    <td>{{ $vols->Terminal_desti }}</td>
                    <td>{{ $vols->Data_sortida }}</td>
                    <td>{{ $vols->Data_arribada }}</td>
                    <td>{{ $vols->Hora_sortida }}</td>
                    <td>{{ $vols->Hora_arribada }}</td>
                    <td>{{ $vols->Classe }}</td>
                </tr>
            @endforeach
        @endif
</tbody>
    </table>
</body>
</html>

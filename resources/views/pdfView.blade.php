<!DOCTYPE html>
<html>
<head>
    <title>Llista de Client</title>
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
    <h1>Llista de Clients</h1>
    <table>
        <thead>
            <tr class="table-primary">
                <td>Passaport_client</td>
                <td>Nom</td>
                <td>Edad</td>
                <td>Telèfon</td>
                <td>Direcció</td>
                <td>Ciutat</td>
                <td>País</td>
                <td>Email</td>
                <td>Tipus de targeta</td>
                <td>Número de la targeta</td>
            </tr>
        </thead>
        <tbody> 
            @if (isset($dades_clients))   
                <tr>
                    <td>{{ $dades_clients->Passaport_client }}</td>
                    <td>{{ $dades_clients->Nom }}</td>
                    <td>{{ $dades_clients->Edat }}</td>
                    <td>{{ $dades_clients->Telèfon }}</td>
                    <td>{{ $dades_clients->Adreça }}</td>
                    <td>{{ $dades_clients->Ciutat }}</td>
                    <td>{{ $dades_clients->País }}</td>
                    <td>{{ $dades_clients->Email }}</td>
                    <td>{{ $dades_clients->Tipus_targeta }}</td>
                    <td>{{ $dades_clients->Número_targeta }}</td>
                </tr>
            @else
                @foreach ($dades_clients as $cli)
                    <tr>
                    <td>{{ $cli->Passaport_client }}</td>
                    <td>{{ $cli->Nom }}</td>
                    <td>{{ $cli->Edat }}</td>
                    <td>{{ $cli->Telèfon }}</td>
                    <td>{{ $cli->Adreça }}</td>
                    <td>{{ $cli->Ciutat }}</td>
                    <td>{{ $cli->País }}</td>
                    <td>{{ $cli->Email }}</td>
                    <td>{{ $cli->Tipus_targeta }}</td>
                    <td>{{ $cli->Número_targeta }}</td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</body>
</html>
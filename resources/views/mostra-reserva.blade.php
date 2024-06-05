<x-app-layout>
@extends('disseny')
@section('content')
    <br>
    <h1>Dades del lloguer</h1>
    <div class="mt-5">
        <table class="table table-striped table-bordered table-hover">
            <thead class="thead-dark">
                <tr class="table-primary">
                    <th scope="col">CAMP</th>
                    <th scope="col">VALOR</th>
                </tr>
            </thead>
            <tbody>
            <tr>
                    <td>Passaport_client</td>
                    <td>{{ $dades_reserva->Passaport_client }}</td>
                </tr>
                <tr>
                    <td>Codi_vol</td>
                    <td>{{ $dades_reserva->Codi_vol }}</td>
                </tr>
                <tr>
                    <td>Localitzador</td>
                    <td>{{ $dades_reserva->Localitzador }}</td>
                </tr>
                <tr>
                    <td>Num_seient</td>
                    <td>{{ $dades_reserva->Num_seient }}</td>
                </tr>
                <tr>
                    <td>Equipatge_ma</td>
                    <td>{{ $dades_reserva->Equipatge_ma == 1 ? 'Sí' : 'No' }}</td>
                </tr>
                <tr>
                    <td>Equipatge_cabina_fins_20kg</td>
                    <td>{{ $dades_reserva->Equipatge_cabina_fins_20kg == 1 ? 'Sí' : 'No' }}</td>
                </tr>
                <tr>
                    <td>Tipus_checking</td>
                    <td>{{ $dades_reserva->Tipus_checking }}</td>
                </tr>
                <tr>
                    <td>Preu_vol</td>
                    <td>{{ $dades_reserva->Preu_vol }}</td>
                </tr>
                <tr>
                    <td>Tipus d'assegurança</td>
                    <td>{{ $dades_reserva->Tipus_assegurança }}</td>
                </tr>
            </tbody>
        </table>
        <br>
        <div class="p-6 bg-white border-b border-gray-200">
        @if(Auth::user()->tipus == 'capDepartament')
        <a href="{{ url('dashboard') }}">Torna al dashboard</a>
    @else
        <a href="{{ url('dashboard-basic') }}">Torna al dashboard</a>
    @endif                  
        </div>
        <div class="p-6 bg-white border-b border-gray-200">
            <a href="{{ url('reserva') }}">Torna enrere</a>
        </div>
    </div>
</x-app-layout>
@endsection

<x-app-layout>
@extends('disseny')
@section('content')
    <br>
    <h1>Llista de reservas</h1>
    <div class="mt-5">
        <table class="table">
            <thead>
                <tr class="table-primary">
                    <th>Passaport_client</th>
                    <th>Codi_vol</th>
                    <th>Localitzador</th>
                    <th>Num_seient</th>
                    <th>Equipatge_ma</th>
                    <th>Equipatge_cabina</th>
                    <th>equipatge_mes_20kg</th>
                    <th>Tipus_checking</th>
                    <th>Preu_vol</th>
                    <th>Tipus d'assegurança</th>
                    <th>Accions sobre la taula</th>
                </tr>
            </thead>
            <tbody>
                @foreach($dades_reserva as $reserva)
                    <tr>
                        <td>{{ $reserva->client->Passaport_client }}</td>
                        <td>{{ $reserva->Codi_vol }}</td>
                        <td>{{ $reserva->Localitzador }}</td>
                        <td>{{ $reserva->Num_seient }}</td>
                        <td>{{ $reserva->Equipatge_ma }}</td>
                        <td>{{ $reserva->Equipatge_cabina_fins_20kg }}</td>
                        <td>{{ $reserva->Quantitat_equipatge_mes_20kg == 1 ? 'Sí' : 'No' }}</td>
                        <td>{{ $reserva->Tipus_checking }}</td>
                        <td>{{ $reserva->Preu_vol }}</td>
                        <td>{{ $reserva->Tipus_assegurança }}</td>

                        <td class="text-left">
                            <a href="{{ route('reserva.edit', ['Passaport_client' => $reserva->Passaport_client, 'Codi_vol' => $reserva->Codi_vol]) }}" class="btn btn-primary btn-sm">Editar</a>
                            <form id="deleteForm" action="{{ route('reserva.destroy', ['Passaport_client' => $reserva->Passaport_client, 'Codi_vol' => $reserva->Codi_vol]) }}" method="post" style="display: inline-block">
                                @csrf
                                @method('DELETE')
                                <button id="deleteButton" class="btn btn-danger btn-sm" type="submit" onclick="return confirm('¿Seguro que deseas borrar este reserva?')">Esborra</button>
                            </form>
                            <a href="{{ route('reserva.show', ['Passaport_client' => $reserva->Passaport_client, 'Codi_vol' => $reserva->Codi_vol]) }}" class="btn btn-info btn-sm">Més</a>
                            <a href="{{ route('pdf.reserva', ['Passaport_client' => $reserva->Passaport_client, 'Codi_vol' => $reserva->Codi_vol]) }}" class="btn btn-primary btn-sm">PDF</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="p-6 bg-white border-b border-gray-200">
    @if(Auth::user()->tipus == 'capDepartament')
        <a href="{{ url('dashboard') }}">Torna al dashboard</a>
    @else
        <a href="{{ url('dashboard-basic') }}">Torna al dashboard</a>
    @endif
    </div>
</x-app-layout>
@endsection

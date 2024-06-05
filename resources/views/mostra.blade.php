<x-app-layout>
@extends('disseny')
@section('content')
    <br>
    <h1>Dades del client</h1>
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
                    <td>{{ $dades_client->Passaport_client }}</td>
                </tr>
                <tr>
                    <td>Nom</td>
                    <td>{{ $dades_client->Nom }}</td>
                </tr>
                <tr>
                    <td>Edat</td>
                    <td>{{ $dades_client->Edat }}</td>
                </tr>
                <tr>
                    <td>Telèfon</td>
                    <td>{{ $dades_client->Telèfon }}</td>
                </tr>
                <tr>
                    <td>Adreça</td>
                    <td>{{ $dades_client->Adreça }}</td>
                </tr>
                <tr>
                    <td>Ciutat</td>
                    <td>{{ $dades_client->Ciutat }}</td>
                </tr>
                <tr>
                    <td>País</td>
                    <td>{{ $dades_client->País }}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>{{ $dades_client->Email }}</td>
                </tr>
				<tr>
                    <td>Tipus de targeta</td>
                    <td>{{ $dades_client->Tipus_targeta }}</td>
                </tr>
				<tr>
                    <td>Número targeta</td>
                    <td>{{ $dades_client->Número_targeta }}</td>
                </tr>
            </tbody>
        </table>
        <br>
        <a href="{{ route('pdf.client', $dades_client->Passaport_client) }}" class="btn btn-primary btn-sm">PDF</a>
        <br><br>
        <div class="p-6 bg-white border-b border-gray-200">
        @if(Auth::user()->tipus == 'capDepartament')
        <a href="{{ url('dashboard') }}">Torna al dashboard</a>
    @else
        <a href="{{ url('dashboard-basic') }}">Torna al dashboard</a>
    @endif                
        </div>
        <div class="p-6 bg-white border-b border-gray-200">
            <a href="{{ url('clients') }}">Tornar enrere</a>
        </div>
    </div>
</x-app-layout>
@endsection

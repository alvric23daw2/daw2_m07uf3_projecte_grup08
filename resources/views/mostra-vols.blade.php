<x-app-layout>
@extends('disseny')
@section('content')
    <br>
    <h1>Dades del Vol</h1>
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
                    <td>Codi_vol</td>
                    <td>{{ $dades_vols->Codi_vol }}</td>
                </tr>
                <tr>
                    <td>Codi_model</td>
                    <td>{{ $dades_vols->Codi_model }}</td>
                </tr>
                <tr>
                    <td>Ciutat_origen</td>
                    <td>{{ $dades_vols->Ciutat_origen }}</td>
                </tr>
                <tr>
                    <td>Ciutat_desti</td>
                    <td>{{ $dades_vols->Ciutat_desti }}</td>
                </tr>
                <tr>
                    <td>Termina_origen</td>
                    <td>{{ $dades_vols->Termina_origen }}</td>
                </tr>
                <tr>
                    <td>Terminal_desti</td>
                    <td>{{ $dades_vols->Terminal_desti }}</td>
                </tr>
                <tr>
                    <td>Data_sortida</td>
                    <td>{{ $dades_vols->Data_sortida }}</td>
                </tr>
                <tr>
                    <td>Data_arribada</td>
                    <td>{{ $dades_vols->Data_arribada }}</td>
                </tr>
                <tr>
                    <td>Hora_sortida</td>
                    <td>{{ $dades_vols->Hora_sortida }}</td>
                </tr>
                <tr>
                    <td>Hora_arribada</td>
                    <td>{{ $dades_vols->Hora_arribada }}</td>
                </tr>
                <tr>
                    <td>Classe</td>
                    <td>{{ $dades_vols->Classe }}</td>
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
            <a href="{{ url('vols') }}">Tornar enrere</a>
        </div>
    </div>
</x-app-layout>
@endsection

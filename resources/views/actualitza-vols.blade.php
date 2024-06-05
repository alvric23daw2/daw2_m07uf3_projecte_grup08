<x-app-layout>
@extends('disseny')
@section('content')
<div class="card mt-5">
    <div class="card-header">
        Actualització de dades
    </div>
    <div class="card-body">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form method="post" action="{{ route('vols.update', $dades_vols->Codi_vol) }}">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="Codi_vol">Codi vol</label>
                <input type="text" class="form-control" name="Codi_vol" value="{{ $dades_vols->Codi_vol }}"/>
            </div>
            <div class="form-group">           
                <label for="Codi_model">Codi Model</label>
                <input type="text" class="form-control" name="Codi_model" value="{{ $dades_vols->Codi_model }}"/>
            </div>
            <div class="form-group">           
                <label for="Ciutat_origen">Ciutat_origen</label>
                <input type="text" class="form-control" name="Ciutat_origen" value="{{ $dades_vols->Ciutat_origen }}"/>
            </div>
            <div class="form-group">           
                <label for="Ciutat_desti">Ciutat_desti</label>
                <input type="text" class="form-control" name="Ciutat_desti" value="{{ $dades_vols->Ciutat_desti }}"/>
            </div>
            <div class="form-group">           
                <label for="Termina_origen">Termina_origen</label>
                <input type="text" class="form-control" name="Termina_origen" value="{{ $dades_vols->Termina_origen }}"/>
            </div>
            <div class="form-group">           
                <label for="Terminal_desti">Terminal_desti</label>
                <input type="text" class="form-control" name="Terminal_desti" value="{{ $dades_vols->Terminal_desti }}"/>
            </div>
            <div class="form-group">           
                <label for="Data_sortida">Data_sortida</label>
                <input type="date" class="form-control" name="Data_sortida" value="{{ $dades_vols->Data_sortida }}"/>
            </div>
            <div class="form-group">           
                <label for="Data_arribada">Data_arribada</label>
                <input type="date" class="form-control" name="Data_arribada" value="{{ $dades_vols->Data_arribada }}"/>
            </div>
            <div class="form-group">           
                <label for="Hora_sortida">Hora_sortida</label>
                <input type="time" class="form-control" name="Hora_sortida" value="{{ $dades_vols->Hora_sortida }}"/>
            </div>
            <div class="form-group">           
                <label for="Hora_arribada">Hora_arribada</label>
                <input type="time" class="form-control" name="Hora_arribada" value="{{ $dades_vols->Hora_arribada }}"/>
            </div>
            <div class="form-group">           
                <label for="Classe">Classe</label>
                <select name="Classe">
                    <option value="Turista" {{ $dades_vols->Classe == 'Turista' ? 'selected' : '' }}>Turista</option>
                    <option value="Bussiness" {{ $dades_vols->Classe == 'Bussiness' ? 'selected' : '' }}>Bussiness</option>
                    <option value="Primera" {{ $dades_vols->Classe == 'Primera' ? 'selected' : '' }}>Primera</option>
                </select>
            </div>
            <button type="submit" class="btn btn-block btn-primary">Actualitza</button>
        </form>
    </div>
</div>
<br><a href="{{ url('vols') }}">Tornar enrere</a>
</x-app-layout>
@endsection

<x-app-layout>
@extends('disseny')
@section('content')
<div class="card mt-5">
    <div class="card-header">
        Actualitzar Reserva
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
        <form method="post" action="{{ route('reserva.update', $dades_reserva->Codi_vol) }}">
            @csrf
            @method('PATCH')
            <div class="form-group">           
                <label for="Passaport_client">Passaport_client</label>
                <select name="Passaport_client" class="form-control">
                    <option value="">Selecciona un Passaport</option>
                    @foreach($dades_clients as $client)
                        <option value="{{ $client->Passaport_client }}" {{ $client->Passaport_client == $dades_reserva->Passaport_client ? 'selected' : '' }}>{{ $client->Passaport_client }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">           
                <label for="Codi_vol">Codi_vol</label>
                <select name="Codi_vol" class="form-control">
                    <option value="">Codi_vol</option>
                    @foreach($dades_vols as $vol)
                        <option value="{{ $vol->Codi_vol }}" {{ $vol->Codi_vol == $dades_reserva->Codi_vol ? 'selected' : '' }}>{{ $vol->Codi_vol }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">           
                <label for="Localitzador">Localitzador</label>
                <input type="text" class="form-control" name="Localitzador" value="{{ $dades_reserva->Localitzador }}"/>
            </div>
            <div class="form-group">           
                <label for="Num_seient">Num_seient</label>
                <input type="number" class="form-control" name="Num_seient" value="{{ $dades_reserva->Num_seient }}"/>
            </div>
            <div class="form-group">
                <label for="Equipatge_ma">Equipatge_ma</label>
                <select class="form-control" name="Equipatge_ma">
                    <option value="1" {{ $dades_reserva->Equipatge_ma == 1 ? 'selected' : '' }}>Sí</option>
                    <option value="0" {{ $dades_reserva->Equipatge_ma == 0 ? 'selected' : '' }}>No</option>
                </select>
            </div>
            <div class="form-group">
                <label for="Equipatge_cabina_fins_20kg">Equipatge_cabina_fins_20kg</label>
                <select class="form-control" name="Equipatge_cabina_fins_20kg">
                    <option value="1" {{ $dades_reserva->Equipatge_cabina_fins_20kg == 1 ? 'selected' : '' }}>Sí</option>
                    <option value="0" {{ $dades_reserva->Equipatge_cabina_fins_20kg == 0 ? 'selected' : '' }}>No</option>
                </select>
            </div>
            <div class="form-group">           
                <label for="Quantitat_equipatge_mes_20kg">Quantitat_equipatge_mes_20kg</label>
                <input type="number" class="form-control" name="Quantitat_equipatge_mes_20kg" value="{{ $dades_reserva->Quantitat_equipatge_mes_20kg }}"/>
            </div>
            <div class="form-group">           
                <label for="Tipus_checking">Tipus_checking</label>
                <select name="Tipus_checking">
                    <option value="on-line" {{ $dades_reserva->Tipus_checking == 'on-line' ? 'selected' : '' }}>on-line</option>
                    <option value="mostrador" {{ $dades_reserva->Tipus_checking == 'mostrador' ? 'selected' : '' }}>mostrador</option>
                    <option value="quiosc" {{ $dades_reserva->Tipus_checking == 'quiosc' ? 'selected' : '' }}>quiosc</option>
                </select>
            </div>
            <div class="form-group">           
                <label for="Preu_vol">Preu_vol</label>
                <input type="number" class="form-control" name="Preu_vol" value="{{ $dades_reserva->Preu_vol }}"/>
            </div>
            <div class="form-group">           
                <label for="Tipus_assegurança">Tipus d'assegurança</label>
                <select name="Tipus_assegurança">
                    <option value="Franquícia_fins_a_1000_Euros" {{ $dades_reserva->Tipus_d_assegurança == 'Franquícia_fins_a_1000_Euros' ? 'selected' : '' }}>Franquícia fins a 1000 Euros</option>
                    <option value="Franquíca_fins_500_Euros" {{ $dades_reserva->Tipus_d_assegurança == 'Franquíca_fins_500_Euros' ? 'selected' : '' }}>Franquíca fins a 500 Euros</option>
                    <option value="Sense_franquícia" {{ $dades_reserva->Tipus_d_assegurança == 'Sense_franquícia' ? 'selected' : '' }}>Sense franquícia</option>
                </select>
            </div>
            <button type="submit" class="btn btn-block btn-primary">Actualitza</button>
        </form>
    </div>
</div>
<br><a href="{{ url('reserva') }}">Tornar enrere</a>
</x-app-layout>
@endsection

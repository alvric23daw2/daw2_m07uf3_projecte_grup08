<x-app-layout>
@extends('disseny')
@section('content')
<div class="card mt-5">
  <div class="card-header">
    Afegeix nova Reserva
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
    <form method="post" action="{{ url('/reserva') }}">
        @csrf
        <div class="form-group">           
            <label for="Passaport_client">Passaport_client</label>
            <select name="Passaport_client" class="form-control">
                <option value="">Selecciona un Passaport</option>
                @foreach($clients as $client)
                    <option value="{{ $client->Passaport_client }}">{{ $client->Passaport_client }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">           
            <label for="Codi_vol">Codi de vol</label>
            <select name="Codi_vol" class="form-control">
                <option value="">Selecciona Codi de vol</option>
                @foreach($vols as $vol)
                    <option value="{{ $vol->Codi_vol }}">{{ $vol->Codi_vol }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">           
            <label for="Localitzador">Localitzador</label>
            <input type="text" class="form-control" name="Localitzador"/>
        </div>
        <div class="form-group">           
            <label for="Num_seient">Num_seient</label>
            <input type="number" class="form-control" name="Num_seient"/>
        </div>
        <div class="form-group">           
            <label for="Equipatge_ma">Equipatge_ma</label>
            <select class="form-control" name="Equipatge_ma">
              <option value="1">Sí</option>
              <option value="0">No</option>    
            </select>
        </div>
        <div class="form-group">           
            <label for="Equipatge_cabina_fins_20kg">Equipatge_cabina_fins_20kg</label>
            <select class="form-control" name="Equipatge_cabina_fins_20kg">
              <option value="1">Sí</option>
              <option value="0">No</option>    
            </select>
        </div>
        <div class="form-group">           
            <label for="Quantitat_equipatge_mes_20kg">Quantitat_equipatge_mes_20kg</label>
            <input type="number" class="form-control" name="Quantitat_equipatge_mes_20kg" value="0"/>
        </div>
        <div class="form-group">           
            <label for="Tipus_checking">Tipus_checking</label>
            <select name="Tipus_checking">
                <option value="on-line">on-line</option>
                <option value="mostrador">mostrador</option>
                <option value="quiosc">quiosc</option>
            </select>
        </div>
        <div class="form-group">           
            <label for="Preu_vol">Preu_vol</label>
            <input type="number" class="form-control" name="Preu_vol"/>
        </div>
        <div class="form-group">           
            <label for="Tipus_assegurança">Tipus d'assegurança</label>
            <select name="Tipus_assegurança">
                <option value="Franquícia_fins_a_1000_Euros">Franquícia fins a 1000 Euros</option>
                <option value="Franquíca_fins_500_Euros">Franquícia fins a 500 Euros</option>
                <option value="Sense_franquícia">Sense franquícia</option>
            </select>
        </div>
        <button type="submit" class="btn btn-block btn-primary">Envia</button>
    </form>    
  </div>
</div>
<div class="p-6 bg-white border-b border-gray-200">
    <a href="{{ url('dashboard') }}">Torna al dashboard</a>
</div>
</x-app-layout>
@endsection

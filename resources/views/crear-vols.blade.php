<x-app-layout>
@extends('disseny')
@section('content')
<div class="card mt-5">
  <div class="card-header">
    Afegeix un nou cotxe
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
    <form method="post" action="{{ url('/vols') }}">
        @csrf
        <div class="form-group">           
            <label for="Codi_vol">Codi Vol</label>
            <input type="text" class="form-control" name="Codi_vol"/>
        </div>
        <div class="form-group">           
            <label for="Codi_model">Codi model avió</label>
            <input type="text" class="form-control" name="Codi_model"/>
        </div>
        <div class="form-group">           
            <label for="Ciutat_origen">Ciutat d'origen</label>
            <input type="text" class="form-control" name="Ciutat_origen"/>
        </div>
        <div class="form-group">           
            <label for="Ciutat_desti">Ciutat de destí</label>
            <input type="text" class="form-control" name="Ciutat_desti"/>
        </div>
        <div class="form-group">           
            <label for="Termina_origen">Terminal d'origen</label>
            <input type="text" class="form-control" name="Termina_origen"/>
        </div>
        <div class="form-group">           
            <label for="Terminal_desti">Terminal de destí</label>
            <input type="text" class="form-control" name="Terminal_desti"/>
        </div>
        <div class="form-group">           
            <label for="Data_sortida">Data de sortida</label>
            <input type="date" class="form-control" name="Data_sortida"/>
        </div>
        <div class="form-group">           
            <label for="Data_arribada">Data d'arribada</label>
            <input type="date" class="form-control" name="Data_arribada"/>
        </div>
        <div class="form-group">           
            <label for="Hora_sortida">Hora de sortida</label>
            <input type="time" class="form-control" name="Hora_sortida"/>
        </div>
        <div class="form-group">           
            <label for="Hora_arribada">Hora d'arribada</label>
            <input type="time" class="form-control" name="Hora_arribada"/>
        </div>
        <div class="form-group">           
            <label for="Classe">Seient classe</label>
            <select class="form-control" name="Classe">
                <option value="Turista">Turista</option>
                <option value="Bussiness">Bussiness</option>
                <option value="Primera">Primera</option>
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

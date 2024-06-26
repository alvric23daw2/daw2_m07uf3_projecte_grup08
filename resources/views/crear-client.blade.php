<x-app-layout>
@extends('disseny')
@section('content')
<div class="card mt-5">
  <div class="card-header">
    Afegir Client
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

    @if(session()->has('success'))
      <div class="alert alert-success">
          {{ session()->get('Success') }}
      </div>
    @endif
    <form method="post" action="{{ url('/clients') }}">
        @csrf
        <!-- https://laravel.com/docs/10.x/csrf -->
        <div class="form-group">           
            <label for="Passaport_client">Passaport client</label>
            <input type="text" class="form-control" name="Passaport_client"/>
        </div>
        <div class="form-group">           
            <label for="Nom">Nom</label>
            <input type="text" class="form-control" name="Nom"/>
        </div>
        <div class="form-group">           
            <label for="Edat">Edat</label>
            <input type="number" class="form-control" name="Edat"/>
        </div>
        <div class="form-group">           
            <label for="Telèfon">Telèfon</label>
            <input type="tel" class="form-control" name="Telèfon"/>
        </div>
        <div class="form-group">           
            <label for="Adreça">Adreça</label>
            <input type="text" class="form-control" name="Adreça"/>
        </div>
        <div class="form-group">           
            <label for="Ciutat">Ciutat</label>
            <input type="text" class="form-control" name="Ciutat"/>
        </div>
        <div class="form-group">           
            <label for="País">País</label>
            <input type="text" class="form-control" name="País"/>
        </div>
        <div class="form-group">           
            <label for="Email">Email</label>
            <input type="email" class="form-control" name="Email"/>
        </div>
        <div class="form-group">           
            <label for="Tipus_targeta">Tipus de targeta</label>
            <select name="Tipus_targeta">
                <option value="Dèbit">Dèbit</option>
                <option value="Crèdit">Crèdit</option>
            </select>
        </div>
        <div class="form-group">           
            <label for="Número_targeta">Número targeta</label>
            <input type="text" class="form-control" name="Número_targeta"/>
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

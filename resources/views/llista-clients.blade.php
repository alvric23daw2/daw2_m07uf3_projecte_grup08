<x-app-layout>
@extends('disseny')
@section('content')
<br>
<h1>Llista de clients</h1>
<div class="mt-5">
  <table class="table">
    <thead>
        <tr class="table-primary">
          <th>Passaport_client</th>
          <th>Nom</th>
          <th>Edat</th>
          <th>Telèfon</th>
          <th>Adreça</th>
          <th>Ciutat</th>
          <th>País</th>
          <th>Email</th>
          <th>Accions sobre la taula</th>
        </tr>
    </thead>
    <tbody>
        @foreach($dades_clients as $cli)
        <tr>
            <td>{{$cli->Passaport_client}}</td>
            <td>{{$cli->Nom}}</td>
            <td>{{$cli->Edat}}</td>
            <td>{{$cli->Telèfon}}</td>
            <td>{{$cli->Adreça}}</td>
            <td>{{$cli->Ciutat}}</td>
            <td>{{$cli->País}}</td>
            <td>{{$cli->Email}}</td>
            <td class="text-left">
            <a href="{{ route('clients.edit', $cli->Passaport_client)}}" class="btn btn-primary btn-sm">Edita</a>
            <form id="deleteForm" action="{{ route('clients.destroy', $cli->Passaport_client)}}" method="post" style="display: inline-block">
                @csrf
                @method('DELETE')
                <button id="deleteButton" class="btn btn-danger btn-sm" type="submit">
                    Esborra
                </button>
            </form>
            <a href="{{ route('clients.show', $cli->Passaport_client)}}" class="btn btn-info btn-sm">Més</a>
            <a href="{{ route('pdf.client', $cli->Passaport_client) }}" class="btn btn-primary btn-sm">PDF</a>
        </td>

        <script>
            document.getElementById('deleteForm').addEventListener('submit', function(event) {
                event.preventDefault(); 

                if (confirm('¿Seguro que deseas borrar este usuario?')) {
                 
                    this.submit();
                } else {
                    
                    return false;
                }
            });
        </script>
         
        </tr>
        @endforeach
    </tbody>
  </table>
<div>

<div class="p-6 bg-white border-b border-gray-200">
@if(Auth::user()->tipus == 'capDepartament')
        <a href="{{ url('dashboard') }}">Torna al dashboard</a>
    @else
        <a href="{{ url('dashboard-basic') }}">Torna al dashboard</a>
    @endif
</div>
</x-app-layout>
@endsection
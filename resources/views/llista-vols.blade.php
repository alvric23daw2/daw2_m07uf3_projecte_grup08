<x-app-layout>
@extends('disseny')
@section('content')
<br>
<h1>Llista de vols</h1>
<div class="mt-5">
  <table class="table">
    <thead>
        <tr class="table-primary">
          <th>Codi vol</th>
          <th>Codi Model</th>
          <th>Ciutat d'origen</th>
          <th>Ciutat de destí</th>
          <th>Terminal d'origen</th>
          <th>Terminal de destí</th>
          <th>Data de sortida</th>
          <th>Data d'arribada</th>
          <th>Hora de sortida</th>
          <th>Hora d'arribada</th>
          <th>Classe</th>
          <th>Accions sobre la taula</th>
        </tr>
    </thead>
    <tbody>
        @foreach($dades_vols as $vols)
        <tr>
            <td>{{$vols->Codi_vol}}</td>
            <td>{{$vols->Codi_model}}</td>
            <td>{{$vols->Ciutat_origen}}</td>
            <td>{{$vols->Ciutat_desti}}</td>
            <td>{{$vols->Termina_origen}}</td>
            <td>{{$vols->Terminal_desti}}</td>
            <td>{{$vols->Data_sortida}}</td>
            <td>{{$vols->Data_arribada}}</td>
            <td>{{$vols->Hora_sortida}}</td>            
            <td>{{$vols->Hora_arribada}}</td>
            <td>{{$vols->Classe}}</td>
            <td class="text-left">
            <a href="{{ route('vols.edit', $vols->Codi_vol)}}" class="btn btn-primary btn-sm">Edita</a>
            <form id="deleteForm" action="{{ route('vols.destroy', $vols->Codi_vol)}}" method="post" style="display: inline-block">
                @csrf
                @method('DELETE')
                <button id="deleteButton" class="btn btn-danger btn-sm" type="submit">
                    Esborra
                </button>
               
            </form>
            <a href="{{ route('vols.show', $vols->Codi_vol)}}" class="btn btn-info btn-sm">Més</a>
            <a href="{{ route('pdf.vols', $vols->Codi_vol) }}" class="btn btn-primary btn-sm">PDF</a> 
        </td>

        <script>
            document.getElementById('deleteForm').addEventListener('submit', function(event) {
                event.preventDefault(); // Evita que se envíe el formulario por defecto

                if (confirm('¿Seguro que deseas borrar este vols?')) {
                    // Si el usuario confirma, envía el formulario
                    this.submit();
                } else {
                    // Si el usuario cancela, no hace nada
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

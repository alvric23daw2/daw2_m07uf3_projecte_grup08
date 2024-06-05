<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-300 leading-tight">
            {{ __('Treballador') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div>Clients
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    
                        <div class="p-6 text-white border-b border-gray-200">
                            <a href="{{ url('clients/crear') }}">Afegir Client<a/>
                        </div>
                        <div class="p-6 text-white border-b border-gray-200">
                            <a href="{{ url('clients') }}">Visualitzar clients<a/>
                        </div>
                    
                </div>   
            </div><br>  
            <div>Vols
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-white border-b border-gray-200">
                            <a href="{{ url('vols/crear') }}">Afegir Vol<a/>
                        </div>
                        <div class="p-6 text-white border-b border-gray-200">
                            <a href="{{ url('vols') }}">Visualitzar Vols<a/>
                        </div>                    
                </div>
            </div><br>
            <div>Reserves
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-white border-b border-gray-200">
                            <a href="{{ url('reserva/crear') }}">Afegir Reserva<a/>
                        </div>
                        <div class="p-6 text-white border-b border-gray-200">
                            <a href="{{ url('reserva') }}">Visualitzar Reserves<a/>
                        </div>                    
                </div>
            </div>
        </div>
    </div>
        
        
</x-app-layout>
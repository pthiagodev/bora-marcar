<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="text-center bg-black text-light  my-4">
        <h1 class="pt-4 pb-2">Bora Marcar?</h1>
        <h3 class="pt-2 pb-4">Procure um evento e divirta-se!</h3>
    </div>

    <div class="container row justify-content-between align-items-center mx-auto">
        @foreach($events as $event)
            <div class="col-3 p-2">
                <div class="card">
                    <h5 class="card-header">{{ $event->location->name }}</h5>
                    <div class="card-body">
                        <h5 class="card-title">{{ $event->name }}</h5>
                        <p class="card-text">Dia {{ $event->date }} no endereço: {{ $event->location->address }}. Organizador: {{ $event->organizer->name }}</p>
                        <a href="#" class="btn btn-primary">Comprar ingresso</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</x-app-layout>

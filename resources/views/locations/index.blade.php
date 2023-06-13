<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de Locais') }}
        </h2>
    </x-slot>

    <div class="container my-4">
        <a href="{{ route('locations.create') }}" class="btn btn-dark mb-2">Novo Local</a>

        @isset($successMsg)
            <div class="alert alert-success">
                {{ $successMsg }}
            </div>
        @endisset

        <ul class="list-group">
            @foreach ($locations as $location)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $location->name }}

                    <span class="d-flex">
                    <a href="{{ route('locations.edit', $location->id) }}" class="btn btn-primary btn-sm">
                        E
                    </a>

                    <form action="{{ route('locations.destroy', $location->id) }}" method="post" class="ms-2">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">
                            X
                        </button>
                    </form>
                </span>
                </li>
            @endforeach
        </ul>
    </div>
</x-app-layout>

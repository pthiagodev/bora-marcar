<x-layout title="Lista de Locais">
    <a href="{{ route('locations.create') }}" class="btn btn-dark mb-2">Adicionar</a>

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
</x-layout>

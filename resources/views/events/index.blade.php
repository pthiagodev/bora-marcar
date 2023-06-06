<x-layout title="Lista de Eventos">
    <a href="{{ route('events.create') }}" class="btn btn-dark mb-2">Adicionar</a>

    @isset($successMsg)
    <div class="alert alert-success">
        {{ $successMsg }}
    </div>
    @endisset

    <ul class="list-group">
        @foreach ($events as $event)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            {{ $event->name }}

            <form action="{{ route('events.destroy', $event->id) }}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm">
                    X
                </button>
            </form>
        </li>
        @endforeach
    </ul>
</x-layout>

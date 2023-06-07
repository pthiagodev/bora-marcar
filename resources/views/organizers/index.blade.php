<x-layout title="Lista de Organizadores">
    <a href="{{ route('organizers.create') }}" class="btn btn-dark mb-2">Adicionar</a>

    @isset($successMsg)
        <div class="alert alert-success">
            {{ $successMsg }}
        </div>
    @endisset

    <ul class="list-group">
        @foreach ($organizers as $organizer)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $organizer->name }}

                <span class="d-flex">
                <a href="{{ route('organizers.edit', $organizer->id) }}" class="btn btn-primary btn-sm">
                    E
                </a>

                <form action="{{ route('organizers.destroy', $organizer->id) }}" method="post" class="ms-2">
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

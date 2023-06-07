<x-layout title="Novo Evento">
    <form action="{{ route('events.store') }}" method="post">
        @csrf

        <div class="row mb-3">
            <div class="col-8">
                <label for="name" class="form-label">Nome:</label>
                <input type="text" id="nome" name="name" class="form-control" value="{{ old('name') }}" autofocus>
            </div>
            <div class="col-4">
                <label for="date" class="form-label">Data e hora do evento:</label>
                <input type="datetime-local" id="date" name="date" class="form-control" value="{{ old('date') }}">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-7">
                <label for="location_id" class="form-label">Local:</label>
                <select name="location_id" id="location" class="form-select" aria-label="select location">
                    <option selected>Selecione o local do evento</option>
                    @foreach($locations as $location)
                        <option value="{{ $location->id }}"> {{ $location->name }} - {{ $location->address }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-5">
                <label for="organizer_id" class="form-label">Organizador:</label>
                <select name="organizer_id" id="organizer" class="form-select" aria-label="select organizer">
                    <option selected>Selecione o organizador do evento</option>
                    @foreach($organizers as $organizer)
                        <option value="{{ $organizer->id }}"> {{ $organizer->name }} - {{ $organizer->phone }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Adicionar</button>
    </form>

</x-layout>

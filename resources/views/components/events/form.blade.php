<div class="container my-4">
    <form action="{{ $action }}" method="post">
        @csrf

        @if($update)
            @method('PUT')
        @endif

        <div class="row mb-3">
            <div class="col-8">
                <label for="name" class="form-label">Nome:</label>
                <input type="text" id="nome" name="name" class="form-control" @isset($name)value="{{ $name }}"@endisset autofocus>
            </div>
            <div class="col-4">
                <label for="date" class="form-label">Data e hora do evento:</label>
                <input type="datetime-local" id="date" name="date" class="form-control" @isset($date)value="{{ $date }}"@endisset">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-7">
                <label for="location_id" class="form-label">Local:</label>
                <select name="location_id" id="location" class="form-select" aria-label="select location">
                    <option selected>
                        @if($oldlocation)
                            {{ $oldlocation->name }} - {{ $oldlocation->address }}
                        @else
                            Selecione o local do evento
                        @endif
                    </option>
                    @foreach($locations as $location)
                        <option value="{{ $location->id }}"> {{ $location->name }} - {{ $location->address }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-5">
                <label for="organizer_id" class="form-label">Organizador:</label>
                <select name="organizer_id" id="organizer" class="form-select" aria-label="select organizer">
                    <option selected>
                        @if($oldorganizer)
                            {{ $oldorganizer->name }} - {{ $oldorganizer->phone }}
                        @else
                            Selecione o organizador do evento
                        @endif
                    </option>
                    @foreach($organizers as $organizer)
                        <option value="{{ $organizer->id }}"> {{ $organizer->name }} - {{ $organizer->phone }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Adicionar</button>
    </form>
</div>

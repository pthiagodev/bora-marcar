<form action="{{ $action }}" method="post">
    @csrf

    @if($update)
        @method('PUT')
    @endif

    <div class="mb-3">
        <label for="nome" class="form-label">Nome:</label>
        <input type="text"
               id="nome"
               name="name"
               class="form-control"
               @isset($name)value="{{ $name }}"@endisset>

        <label for="endereco" class="form-label">Endereço:</label>
        <input type="text"
               id="endereco"
               name="address"
               class="form-control"
               @isset($address)value="{{ $address }}"@endisset>
    </div>

    <button type="submit" class="btn btn-primary">Adicionar</button>
</form>

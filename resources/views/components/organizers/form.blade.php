<div class="container my-4">
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

            <label for="telefone" class="form-label">Telefone:</label>
            <input type="text"
                   id="telefone"
                   name="phone"
                   class="form-control"
                   @isset($phone)value="{{ $phone }}"@endisset>
        </div>

        <button type="submit" class="btn btn-primary">Adicionar</button>
    </form>
</div>

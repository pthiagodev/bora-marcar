<x-layout title="Lista de Eventos">
    <a href="/eventos/criar" class="btn btn-dark mb-2">Adicionar</a>

    <ul class="list-group">
        @foreach ($eventos as $evento)
        <li class="list-group-item">{{ $evento->nome }}</li>
        @endforeach
    </ul>
</x-layout>

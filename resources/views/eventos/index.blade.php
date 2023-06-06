<x-layout title="Lista de Eventos">
    <a href="/eventos/criar">Adicionar</a>

    <ul>
        @foreach ($eventos as $evento)
        <li>{{ $evento }}</li>
        @endforeach;
    </ul>
</x-layout>

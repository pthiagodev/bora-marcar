<x-layout title="Editar Evento '{{ $event->name }}'">
    <x-events.form :action="route('events.update', $event->id)" :name="$event->name" />
</x-layout>

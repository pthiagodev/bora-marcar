<x-layout title="Novo Evento">
    <x-events.form :action="route('events.store')" :name="old('name')" :update="false" />
</x-layout>

<x-layout title="Editar Organizador '{{ $organizer->name }}'">
    <x-organizers.form :action="route('organizers.update', $organizer->id)" :name="$organizer->name" :phone="$organizer->phone" :update="true" />
</x-layout>

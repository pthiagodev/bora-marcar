<x-layout title="Editar Local '{{ $location->name }}'">
    <x-locations.form :action="route('locations.update', $location->id)" :name="$location->name" :address="$location->address" :update="true" />
</x-layout>

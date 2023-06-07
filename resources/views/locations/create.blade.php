<x-layout title="Novo Local">
    <x-locations.form :action="route('locations.store')" :name="old('name')" :address="old('address')" :update="false" />
</x-layout>

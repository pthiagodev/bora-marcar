<x-layout title="Novo Organizador">
    <x-organizers.form :action="route('organizers.store')" :name="old('name')" :phone="old('phone')" :update="false" />
</x-layout>

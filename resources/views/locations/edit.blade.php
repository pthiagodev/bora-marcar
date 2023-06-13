<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Local') }}
        </h2>
    </x-slot>
    <x-locations.form :action="route('locations.update', $location->id)"
                      :name="$location->name"
                      :address="$location->address"
                      :update="true" />
</x-app-layout>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Novo Local') }}
        </h2>
    </x-slot>
    <x-locations.form :action="route('locations.store')"
                      :name="old('name')"
                      :address="old('address')"
                      :update="false" />
</x-app-layout>

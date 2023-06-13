<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Novo Organizador') }}
        </h2>
    </x-slot>
    <x-organizers.form :action="route('organizers.store')"
                       :name="old('name')"
                       :phone="old('phone')"
                       :update="false" />
</x-app-layout>

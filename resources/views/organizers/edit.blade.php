<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Organizador') }}
        </h2>
    </x-slot>
    <x-organizers.form :action="route('organizers.update', $organizer->id)"
                       :name="$organizer->name"
                       :phone="$organizer->phone"
                       :update="true" />
</x-app-layout>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Novo Evento') }}
        </h2>
    </x-slot>
    <x-events.form :action="route('events.store')"
                   :name="old('name')"
                   :date="old('date')"
                   :oldlocation="old('location')"
                   :locations="$locations"
                   :oldorganizer="old('organizer')"
                   :organizers="$organizers"
                   :update="false" />

</x-app-layout>

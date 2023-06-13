<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Evento') }}
        </h2>
    </x-slot>
    <x-events.form :action="route('events.update', $event->id)"
                   :name="$event->name"
                   :date="$event->date"
                   :oldlocation="$event->location"
                   :locations="$locations"
                   :oldorganizer="$event->organizer"
                   :organizers="$organizers"
                   :update="true" />
</x-app-layout>

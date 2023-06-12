<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventFormRequest;
use App\Models\Event;
use App\Models\Location;
use App\Models\Organizer;
use App\Repositories\Event\EventsRepository;
use App\Repositories\Location\LocationsRepository;
use App\Repositories\Organizer\OrganizersRepository;

class EventsController extends Controller
{
    public function __construct(
        private EventsRepository $eventsRepository,
        private LocationsRepository $locationsRepository,
        private OrganizersRepository $organizersRepository)
    {
    }

    public function index()
    {
        $events = $this->eventsRepository->list();
        $successMsg = session('success.msg');

        return view('events.index')->with('events', $events)->with('successMsg', $successMsg);
    }

    public function create()
    {
        $locations = $this->locationsRepository->list();
        $organizers = $this->organizersRepository->list();

        return view('events.create')->with('locations', $locations)->with('organizers', $organizers);
    }

    public function store(EventFormRequest $request)
    {
        $event = $this->eventsRepository->add($request);

        return to_route('events.index')
            ->with('success.msg', "Evento '{$event->name}' adicionado com sucesso!");
    }

    public function show(Event $event)
    {
        //
    }

    public function edit(Event $event)
    {
        return view('events.edit')->with('event', $event);
    }

    public function update(EventFormRequest $request, Event $event)
    {
        $event = $this->eventsRepository->update($request, $event);

        return to_route('events.index')
            ->with('success.msg', "Evento '{$event->name}' atualizado com sucesso!");
    }

    public function destroy(Event $event)
    {
        $this->eventsRepository->remove($event);

        return to_route('events.index')
            ->with('success.msg', "Evento '{$event->name}' removido com sucesso!");
    }
}

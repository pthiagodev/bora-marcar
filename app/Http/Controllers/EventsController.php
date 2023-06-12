<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventFormRequest;
use App\Models\Event;
use App\Models\Location;
use App\Models\Organizer;
use App\Repositories\Event\EventsRepository;

class EventsController extends Controller
{
    public function __construct(private EventsRepository $repository)
    {
    }

    public function index()
    {
        $events = $this->repository->list();
        $successMsg = session('success.msg');

        return view('events.index')->with('events', $events)->with('successMsg', $successMsg);
    }

    public function create()
    {
        $locations = Location::query()->orderBy('name')->get();
        $organizers = Organizer::query()->orderBy('name')->get();

        return view('events.create')->with('locations', $locations)->with('organizers', $organizers);
    }

    public function store(EventFormRequest $request)
    {
        $event = $this->repository->add($request);

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
        $event = $this->repository->update($request, $event);

        return to_route('events.index')
            ->with('success.msg', "Evento '{$event->name}' atualizado com sucesso!");
    }

    public function destroy(Event $event)
    {
        $this->repository->delete($event);

        return to_route('events.index')
            ->with('success.msg', "Evento '{$event->name}' removido com sucesso!");
    }
}

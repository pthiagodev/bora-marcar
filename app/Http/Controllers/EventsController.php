<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventFormRequest;
use App\Models\Event;
use App\Models\Location;
use App\Models\Organizer;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function index()
    {
        $events = Event::query()->orderBy('name')->get();
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
        $event = Event::create($request->all());

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
        $event->name = $request->name;
        $event->save();

        return to_route('events.index')
            ->with('success.msg', "Evento '{$event->name}' atualizado com sucesso!");
    }

    public function destroy(Event $event)
    {
        $event->delete();

        return to_route('events.index')
            ->with('success.msg', "Evento '{$event->name}' removido com sucesso!");
    }
}

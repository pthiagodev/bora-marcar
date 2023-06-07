<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventFormRequest;
use App\Models\Event;
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
        return view('events.create');
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

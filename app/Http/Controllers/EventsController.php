<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function index(Request $request)
    {
        $events = Event::query()->orderBy('name')->get();
        $successMsg = session('success.msg');

        return view('events.index')->with('events', $events)->with('successMsg', $successMsg);
    }

    public function create()
    {
        return view('events.create');
    }

    public function store(Request $request)
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
        //
    }

    public function update(Request $request, Event $event)
    {
        //
    }

    public function destroy(Event $event)
    {
        $event->delete();

        return to_route('events.index')
            ->with('success.msg', "Evento '{$event->name}' removido com sucesso!");
    }
}

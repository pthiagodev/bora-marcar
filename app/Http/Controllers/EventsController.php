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
        Event::create($request->all());

        return to_route('events.index');
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

    public function destroy(Request $request)
    {
        Event::destroy($request->event);
        $request->session()->flash('success.msg', 'Evento removido com sucesso!');

        return to_route('events.index');
    }
}

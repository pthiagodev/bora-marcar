<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function index()
    {
        $eventos = Event::all();

        return view('eventos.index')->with('eventos', $eventos);
    }

    public function create()
    {
        return view('eventos.create');
    }

    public function store(Request $request)
    {
        $evento = new Event();
        $evento->nome = $request->input('nome');
        $evento->save();

        return redirect('/eventos');
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
        //
    }
}

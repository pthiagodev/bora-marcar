<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function index(Request $request)
    {
        $eventos = [
            'DevOps day',
            'PHPCE',
            'Encontro de usuários Java'
        ];

        return view('eventos.index')->with('eventos', $eventos);
    }

    public function create()
    {
        return view('eventos.create');
    }

    public function store(Request $request)
    {
        //
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

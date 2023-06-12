<?php

namespace App\Repositories\Event;

use App\Http\Requests\EventFormRequest;
use App\Models\Event;
use Illuminate\Database\Eloquent\Collection;

class EloquentEventsRepository implements EventsRepository
{
    public function add(EventFormRequest $request): Event
    {
        return Event::create($request->all());
    }

    public function list(): Collection|array
    {
        return Event::query()->orderBy('name')->get();
    }

    public function update(EventFormRequest $request, Event $event): Event
    {
        $event->name = $request->name;
        $event->save();

        return $event;
    }

    public function remove(Event $event)
    {
        $event->delete();
    }
}

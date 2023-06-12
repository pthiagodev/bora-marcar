<?php

namespace App\Repositories\Event;

use App\Http\Requests\EventFormRequest;
use App\Models\Event;
use Illuminate\Database\Eloquent\Collection;

interface EventsRepository
{
    public function add(EventFormRequest $request): Event;

    public function list(): Collection|array;

    public function update(EventFormRequest $request, Event $event): Event;

    public function delete(Event $event);
}

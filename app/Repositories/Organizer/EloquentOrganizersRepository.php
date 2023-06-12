<?php

namespace App\Repositories\Organizer;

use App\Models\Organizer;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class EloquentOrganizersRepository implements OrganizersRepository
{
    public function add(Request $request): Organizer
    {
        return Organizer::create($request->all());
    }

    public function list(): Collection|array
    {
        return Organizer::query()->orderBy('name')->get();
    }

    public function update(Request $request, Organizer $organizer): Organizer
    {
        $organizer->name = $request->name;
        $organizer->phone = $request->phone;
        $organizer->save();

        return $organizer;
    }

    public function remove(Organizer $organizer)
    {
        $organizer->delete();
    }
}

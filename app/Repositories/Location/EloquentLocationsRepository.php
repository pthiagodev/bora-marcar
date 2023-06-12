<?php

namespace App\Repositories\Location;

use App\Models\Location;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class EloquentLocationsRepository implements LocationsRepository
{
    public function add(Request $request): Location
    {
        return Location::create($request->all());
    }

    public function list(): Collection|array
    {
        return Location::query()->orderBy('name')->get();
    }

    public function update(Request $request, Location $location): Location
    {
        $location->name = $request->name;
        $location->address = $request->address;
        $location->save();

        return $location;
    }

    public function remove(Location $location)
    {
        $location->delete();
    }
}

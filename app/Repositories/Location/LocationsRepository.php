<?php

namespace App\Repositories\Location;

use App\Models\Location;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

interface LocationsRepository
{
    public function add(Request $request): Location;

    public function list(): Collection|array;

    public function update(Request $request, Location $location): Location;

    public function remove(Location $location);
}

<?php

namespace App\Repositories\Organizer;

use App\Models\Organizer;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

interface OrganizersRepository
{
    public function add(Request $request): Organizer;

    public function list(): Collection|array;

    public function update(Request $request, Organizer $organizer): Organizer;

    public function remove(Organizer $organizer);
}

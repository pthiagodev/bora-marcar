<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Repositories\Location\LocationsRepository;
use Illuminate\Http\Request;

class LocationsController extends Controller
{

    public function __construct(
        private LocationsRepository $locationsRepository)
    {
    }

    public function index()
    {
        $locations = $this->locationsRepository->list();
        $successMsg = session('success.msg');

        return view('locations.index')->with('locations', $locations)
            ->with('successMsg', $successMsg);
    }

    public function create()
    {
        return view('locations.create');
    }

    public function store(Request $request)
    {
        $location = $this->locationsRepository->add($request);

        return to_route('locations.index')
            ->with('success.msg', "Local '{$location->name}' adicionado com sucesso!");
    }

    public function show(string $id)
    {
        //
    }

    public function edit(Location $location)
    {
        return view('locations.edit')->with('location', $location);
    }

    public function update(Request $request, Location $location)
    {
        $location = $this->locationsRepository->update($request, $location);

        return to_route('locations.index')
            ->with('success.msg', "Local '{$location->name}' atualizado com sucesso!");
    }

    public function destroy(Location $location)
    {
        $this->locationsRepository->remove($location);

        return to_route('locations.index')
            ->with('success.msg', "Local '{$location->name}' removido com sucesso!");
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class LocationsController extends Controller
{
    public function index()
    {
        $locations = Location::query()->orderBy('name')->get();
        $successMsg = session('success.msg');

        return view('locations.index')->with('locations', $locations)->with('successMsg', $successMsg);
    }

    public function create()
    {
        return view('locations.create');
    }

    public function store(Request $request)
    {
        $location = Location::create($request->all());

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
        $location->name = $request->name;
        $location->address = $request->address;
        $location->save();

        return to_route('locations.index')
            ->with('success.msg', "Local '{$location->name}' atualizado com sucesso!");
    }

    public function destroy(Location $location)
    {
        $location->delete();

        return to_route('locations.index')
            ->with('success.msg', "Local '{$location->name}' removido com sucesso!");
    }
}

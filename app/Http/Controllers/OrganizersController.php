<?php

namespace App\Http\Controllers;

use App\Models\Organizer;
use App\Repositories\Organizer\OrganizersRepository;
use Illuminate\Http\Request;

class OrganizersController extends Controller
{

    public function __construct(
        private OrganizersRepository $organizersRepository)
    {
    }

    public function index()
    {
        $organizers = Organizer::query()->orderBy('name')->get();
        $successMsg = session('success.msg');

        return view('organizers.index')->with('organizers', $organizers)
            ->with('successMsg', $successMsg);
    }

    public function create()
    {
        return view('organizers.create');
    }

    public function store(Request $request)
    {
        $organizer = $this->organizersRepository->add($request);

        return to_route('organizers.index')
            ->with('success.msg', "Organizador '{$organizer->name}' adicionado com sucesso!");
    }


    public function show(string $id)
    {
        //
    }

    public function edit(Organizer $organizer)
    {
        return view('organizers.edit')->with('organizer', $organizer);
    }

    public function update(Request $request, Organizer $organizer)
    {
        $organizer = $this->update($request, $organizer);

        return to_route('organizers.index')
            ->with('success.msg', "Organizador '{$organizer->name}' atualizado com sucesso!");
    }

    public function destroy(Organizer $organizer)
    {
        $organizer->delete();

        return to_route('organizers.index')
            ->with('success.msg', "Organizador '{$organizer->name}' removido com sucesso!");
    }
}

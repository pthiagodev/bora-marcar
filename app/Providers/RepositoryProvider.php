<?php

namespace App\Providers;

use App\Repositories\Event\EloquentEventsRepository;
use App\Repositories\Event\EventsRepository;
use App\Repositories\Location\EloquentLocationsRepository;
use App\Repositories\Location\LocationsRepository;
use App\Repositories\Organizer\EloquentOrganizersRepository;
use App\Repositories\Organizer\OrganizersRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryProvider extends ServiceProvider
{
    public array $bindings = [
        EventsRepository::class => EloquentEventsRepository::class,
        LocationsRepository::class => EloquentLocationsRepository::class,
        OrganizersRepository::class => EloquentOrganizersRepository::class
    ];

}

<?php

namespace App\Providers;

use App\Repositories\Event\EloquentEventsRepository;
use App\Repositories\Event\EventsRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryProvider extends ServiceProvider
{
    public array $bindings = [
        EventsRepository::class => EloquentEventsRepository::class
    ];

}

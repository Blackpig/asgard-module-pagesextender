<?php namespace Modules\PagesExtender\Providers;

use Modules\Page\Events\PageWasUpdated;
use Modules\PagesExtender\Events\Handlers\HandlePageWasUpdatedData;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        PageWasUpdated::class => [
            HandlePageWasUpdatedData::class,
        ],
    ];
}

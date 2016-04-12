<?php namespace Modules\PagesExtender\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\PagesExtender\Composers\PagesExtenderComposer;

class PagesExtenderServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerBindings();
        view()->composer('page::admin.edit', PagesExtenderComposer::class);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array();
    }

    private function registerBindings()
    {
        $this->app->bind(
            'Modules\PagesExtender\Repositories\FieldsRepository',
            function () {
                $repository = new \Modules\PagesExtender\Repositories\Eloquent\EloquentFieldsRepository(new \Modules\PagesExtender\Entities\Fields());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\PagesExtender\Repositories\Cache\CacheFieldsDecorator($repository);
            }
        );
// add bindings

    }
}

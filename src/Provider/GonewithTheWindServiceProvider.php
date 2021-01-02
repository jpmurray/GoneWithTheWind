<?php

namespace Jpmurray\GoneWithTheWind\Provider;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class GonewithTheWindServiceProvider extends ServiceProvider
{
    private const PATH_VIEWS = __DIR__ . '/../../resources/views';

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->loadViewsFrom(self::PATH_VIEWS, 'gone-with-the-wind');

        Blade::componentNamespace('Jpmurray\\GoneWithTheWind\\View\\Components\\Cards', 'with-wind-cards');
        Blade::componentNamespace('Jpmurray\\GoneWithTheWind\\View\\Components\\Forms', 'with-wind-forms');
    }
}

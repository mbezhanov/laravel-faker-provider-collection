<?php

namespace Bezhanov\Faker\Laravel;

use Bezhanov\Faker\ProviderCollectionHelper;
use Faker\Factory;
use Faker\Generator;
use Illuminate\Support\ServiceProvider;

class FakerServiceProvider extends ServiceProvider
{
    public function register()
    {
        if ($this->app->bound('config')) {
            $locale ??= $this->app->make('config')->get('app.faker_locale');
        }
        $locale ??= 'en_US';
        $abstract = Generator::class.':'.$locale;
        $this->app->singleton($abstract, function () use ($locale) {
            $faker = Factory::create($locale);
            ProviderCollectionHelper::addAllProvidersTo($faker);

            return $faker;
        });
    }
}

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
        $this->app->singleton(Generator::class, function () {
            $faker = Factory::create();
            ProviderCollectionHelper::addAllProvidersTo($faker);

            return $faker;
        });
    }
}

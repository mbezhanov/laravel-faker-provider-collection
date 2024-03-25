# laravel-faker-provider-collection

This package contains a [Service Provider](https://laravel.com/docs/10.x/providers) that automatically registers the [faker-provider-collection](https://github.com/mbezhanov/faker-provider-collection) library with your [Laravel](https://laravel.com/) application.

Detailed information about the various Faker providers exposed by [faker-provider-collection](https://github.com/mbezhanov/faker-provider-collection) can be found [here](https://github.com/mbezhanov/faker-provider-collection/blob/master/README.md).

## Quickstart

Add the provider to your Laravel project with [Composer](https://getcomposer.org/):

```bash
composer require --dev mbezhanov/laravel-faker-provider-collection
```

Add the `FakerServiceProvider` class to your `./bootstrap/providers.php` file:

```php
return [
    // other provider definitions
    Bezhanov\Faker\Laravel\FakerServiceProvider::class,
];
```

At this point, you should be able to use the all the additional faker providers bundled with the library in your [Model Factories](https://laravel.com/docs/11.x/seeding#using-model-factories)

In example, assuming you have defined the following model factory:

```php
<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'university' => fake()->university,
            'sport' => fake()->sport,
            'team' => fake()->team,
        ];
    }
}
```

You should be able to do:

```bash
/app # php artisan tinker
Psy Shell v0.12.2 (PHP 8.3.4 — cli) by Justin Hileman
> \App\Student::factory(5)->make();
= Illuminate\Database\Eloquent\Collection {#6008
    all: [
      App\Models\Student {#6065
        university: "Ironston Technical College",
        sport: "baseball",
        team: "Minnesota Warlocks",
      },
      App\Models\Student {#5980
        university: "Mallowpond TAFE",
        sport: "hockey",
        team: "New York Oracles",
      },
      App\Models\Student {#6066
        university: "Vertapple College",
        sport: "rugby",
        team: "Delaware Bees",
      },
      App\Models\Student {#6069
        university: "Falconholt University",
        sport: "lacrosse",
        team: "West Virginia Vixens",
      },
      App\Models\Student {#6046
        university: "Flowerlake College",
        sport: "basketball",
        team: "Louisiana Spiders",
      },
    ],
  }
> exit

   INFO  Goodbye.

/app # 
```

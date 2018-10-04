# laravel-faker-provider-collection

This package contains a [Service Provider](https://laravel.com/docs/5.7/providers) that automatically registers the [faker-provider-collection](https://github.com/mbezhanov/faker-provider-collection) library with your [Laravel](https://laravel.com/) application.

Detailed information about the various Faker providers exposed by [faker-provider-collection](https://github.com/mbezhanov/faker-provider-collection) can be found [here](https://github.com/mbezhanov/faker-provider-collection/blob/master/README.md).

## Quickstart

Add the provider to your Laravel project via [Composer](https://getcomposer.org/):

```bash
composer require --dev mbezhanov/laravel-faker-provider-collection
```

You should now be able to use the all the extra providers bundled with this library in your [Model Factories](https://laravel.com/docs/5.7/seeding#using-model-factories)

In example, assuming you have defined the following model factory:

```php
<?php

// ./database/factories/StudentFactory.php

use Faker\Generator as Faker;

$factory->define(App\Models\Student::class, function (Faker $faker) {
    return [
        'university' => $faker->university,
        'sport' => $faker->sport,
        'team' => $faker->team,
    ];
});
```

You should be able to do:

```bash
/app # php artisan tinker
Psy Shell v0.8.17 (PHP 7.1.10 — cli) by Justin Hileman
>>> factory(App\Models\Student::class, 5)->create();
=> Illuminate\Database\Eloquent\Collection {#1300
     all: [
       App\Models\Student {#1296
         university: "Ostbarrow Technical College",
         sport: "rugby",
         team: "Tennessee Foes",
         updated_at: "2018-10-04 08:25:49",
         created_at: "2018-10-04 08:25:49",
         id: 1,
       },
       App\Models\Student {#1294
         university: "Vertapple Technical College",
         sport: "baseball",
         team: "Alabama Bees",
         updated_at: "2018-10-04 08:25:49",
         created_at: "2018-10-04 08:25:49",
         id: 2,
       },
       App\Models\Student {#1292
         university: "Iceborough TAFE",
         sport: "soccer",
         team: "Arkansas Bees",
         updated_at: "2018-10-04 08:25:50",
         created_at: "2018-10-04 08:25:50",
         id: 3,
       },
       App\Models\Student {#1291
         university: "Flowerlake College",
         sport: "hockey",
         team: "North Dakota Fishes",
         updated_at: "2018-10-04 08:25:50",
         created_at: "2018-10-04 08:25:50",
         id: 4,
       },
       App\Models\Student {#1293
         university: "Brighthurst Technical College",
         sport: "lacrosse",
         team: "Virginia Zombies",
         updated_at: "2018-10-04 08:25:50",
         created_at: "2018-10-04 08:25:50",
         id: 5,
       },
     ],
   }
>>> exit
Exit:  Goodbye.
/app # 
```

<?php

/** @var Factory $factory */

use App\Car;
use Faker\Generator as Faker;
use Faker\Provider\Fakecar;
use Illuminate\Database\Eloquent\Factory;
use Illuminate\Support\Str;

$factory->define(
    Car::class,
    function (Faker $faker) {
        $faker->addProvider(new Fakecar($faker));
        $v = $faker->vehicleArray();
        $faked_name = $v['brand'] . ' ' . $v['model'] . ' ' . $faker->numberBetween(1, 5);
        return [
            'name' => $faked_name,
            'slug' => Str::slug($faked_name, '-'),
            'type' => $faker->vehicleType,
            'image' => 'highlighted-car-' . $faker->numberBetween(1, 3) . '.png',
            'description' => $faker->paragraph,
            'price' => $faker->numberBetween(10, 100),
            'comfort' => $faker->numberBetween(10, 90),
            'speed' => $faker->numberBetween(10, 90),
            'featured' => $faker->numberBetween(0, 1),
        ];
    }
);

<?php

    use Faker\Generator as Faker;
    use App\Task;

    $factory->define(App\Task::class, function (Faker $faker) {
        return [
            'title' => $faker->sentence,
        ];
    });
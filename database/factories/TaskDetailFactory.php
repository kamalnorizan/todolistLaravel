<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Task_detail;
use Faker\Generator as Faker;

$factory->define(Task_detail::class, function (Faker $faker) {
    return [
        //
        'task_id' => rand(1, 100),
        'title' => $faker->sentence(5),
        'status' => 'new task',
    ];
});

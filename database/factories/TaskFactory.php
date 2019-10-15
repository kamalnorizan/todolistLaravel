<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Task;
use Faker\Generator as Faker;
use Illuminate\Support\Carbon;
$factory->define(Task::class, function (Faker $faker) {
    $year = 2019;
    $month = rand(11, 12);
    $day = rand(1, 31);
    $date = Carbon::create($year, $month, $day, 0, 0, 0);
    return [
        //
        'user_id' => rand(1,21),
        'title' => $faker->sentence(3),
        'due_date'=> $date,
        'status' => 'new task',
    ];
});

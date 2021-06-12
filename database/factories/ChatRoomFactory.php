<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ChatRoom;
use App\Models\User;
use Faker\Generator as Faker;

$factory->define(ChatRoom::class, function (Faker $faker) {
    return [
        'name'=>$faker->word,
        'slug'=>$faker->word,
        'type'=>0,
        'owner_id'=>factory(User::class)->create()
    ];
});

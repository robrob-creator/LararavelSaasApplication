<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Message;
use App\Models\User;
use Faker\Generator as Faker;

$factory->define(Message::class, function (Faker $faker) {
    return [
        'name'=>$faker->word,
        'chat_room_id'=>factory(ChatRoom::class)->create(),
        'sender_id'=>factory(User::class)->create(),
        'content'=>$faker->word(10,true)
    ];
});

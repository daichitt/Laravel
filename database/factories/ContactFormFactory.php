<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

//use App\Model;
//下記の既述をして読み込む
use App\Models\ContactForm;
use Faker\Generator as Faker;

//defineの後ろもContactFormに書き変える
$factory->define(ContactForm::class, function (Faker $faker) {
    return [
        'your_name' => $faker->name,
        'title' => $faker->realText(50),
        'email' => $faker->unique()->email,
        'url' => $faker->url,
        'gender' => $faker->randomElement(['0','1']),
        'age' => $faker->numberBetween($min = 1, $max = 6),
        'contact' => $faker->realText(20),
    ];
});

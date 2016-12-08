<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Model\NewsCat::class,function(Faker\Generator $faker){

});

$factory->define(App\Model\News::class,function(Faker\Generator $faker){
    return [
        'title'=>$faker->sentence(4),
        'cover'=>'image/515c81e78d90ec4139375056831b4fd7.jpeg',
        'abstract'=>$faker->paragraph,
        'content'=>$faker->text,
    ];
});

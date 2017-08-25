<?php

use App\User;
use App\Post;

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
$factory->define(User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
        'role_id' => 4,
        'verification_code' => generateVerificationCode()
    ];
});

$factory->define(Post::class, function (Faker\Generator $faker) {
    $title = $faker->title;
    return [
        'user_id' => function() {
        	return factory(User::class)->create()->id;
        },
        'title' => $title,
        'body' => $faker->paragraph,
        'slug' => str_slug($title),
        'published_at' => \Carbon\Carbon::now()
    ];
});

$factory->defineAs(User::class, 'superadmin', function (Faker\Generator $faker) use($factory) {
    $user = $factory->raw(App\User::class);

    return array_merge($user, ['id' => 1, 'email' => 'admin@admin.com', 'role_id' => 1, 'is_super_admin' => true]);
});
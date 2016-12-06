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

$factory->define(App\Item::class, function (Faker\Generator $faker) {
    return [
        'category_id' => App\Category::all()->random()->id,
        'naziv' => $faker->sentence(),
        'slika' => $faker->imageUrl('480', '320'),
        'cijena_pdv' => $faker->randomFloat(2),
        'cijena_popust' => $faker->randomFloat(2),
        'opis' => $faker->realText(),
        'en_klasa' => $faker->imageUrl('480', '320'),
        'kapacitet_hladjenja' => $faker->uuid,
        'kapacitet_grijanja' => $faker->uuid,
        'rashladno_sredstvo' => $faker->uuid,
        'prikljucak_el_energije_hladjenje' => $faker->uuid,
        'prikljucak_el_energije_grijanje' => $faker->uuid,
        'eer' => $faker->uuid,
        'cop' => $faker->uuid,
        'odvlazivanje' => $faker->uuid,
        'napajanje' => $faker->uuid,
        'buka_un_jedinice' => $faker->uuid,
        'buka_vanj_jedinice' => $faker->uuid,
        'dimenzije_un_jedinice' => $faker->uuid,
        'dimenzije_vanj_jedinice' => $faker->uuid,
        'tezina_un_jedinice' => $faker->uuid,
        'tezina_vanj_jedinice' => $faker->uuid,
        'promjer_cijevi_tekuca' => $faker->uuid,
        'promjer_cijevi_plinska' => $faker->uuid,
        'max_duljina_cjevovoda' => $faker->randomDigitNotNull,
        'max_visinska_razlika' => $faker->randomDigitNotNull,
        'protog_zraka_unutarnja' => $faker->uuid,
        'protog_zraka_vanjska' => $faker->uuid,
        'raspolozivi_pad_tlaka' => $faker->uuid,
        'jamstvo' => $faker->uuid,
        'seer' => $faker->randomFloat(2),
        'scop' => $faker->randomFloat(2),
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s"),
    ];
});

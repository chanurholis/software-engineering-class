<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Student;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Student::class, function (Faker $faker) {
    return [
        'student_name' => $faker->name,
        'student_nisn' => $faker->randomDigit,
        'student_place_of_birth' => $faker->address,
        'student_date_of_birth' => $faker->dateTime,
        'student_gender' => 'L',
        'student_sequence_in_family' => random_int(1, 10),
        'student_address' => $faker->address,
        'student_phone' => $faker->phoneNumber,
        'student_email' => $faker->email
    ];
});

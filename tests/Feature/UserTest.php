<?php

namespace Tests\Feature;

use App\User;
use Faker\Factory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
   public function create_user_test()
   {
       $users = [];
       $faker = Factory::create();
       $pass = str_random(8);
       $users[] = User::create([
           'username' => $faker->userName,
           'email' => $faker->email,
           'name' => $faker->name,
           'password' =>Hash::make($pass),
           'admin'=>1,

       ]);
       $users[] = User::create([
           'username' => $faker->userName,
           'email' => $faker->email,
           'name' => $faker->name,
           'password' =>Hash::make($pass),
           'admin'=>0,

       ]);
       $users[] = User::create([
           'username' => $faker->userName,
           'email' => $faker->email,
           'name' => $faker->name,
           'password' =>Hash::make($pass),
           'admin'=>0,

       ]);
       $users[] = User::create([
           'username' => $faker->userName,
           'email' => $faker->email,
           'name' => $faker->name,
           'password' =>Hash::make($pass),
           'admin'=>0,

       ]);
   }
}

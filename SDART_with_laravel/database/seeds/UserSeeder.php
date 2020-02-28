<?php

use Illuminate\Database\Seeder;

use App\User;

class UserSeeder extends Seeder {

    public function run()
    {
        $faker = Faker\Factory::create('fr_FR');

        for ($i = 0; $i < 10; $i++) {
            $user = new User;
            $user->lastName = $faker->lastName;
            $user->firstName = $faker->firstName;
            $user->inconLink = $faker->randomDigit;
            $user->levelAdminUser = $faker->randomDigitNot(4,5,6,7,8,9);
            $user->id_typeart = $faker->randomDigitNot(4,5,6,7,8,9);
            $user->id_country = $faker->randomDigit;
            $user->pseudo = $faker->unique()->firstName;
            $user->email = $faker->unique()->email;
            $user->password =$faker->password;
            $user->description = $faker->text;
            $user->entreprise = $faker->company;
            $user->save();
        }
    }
}

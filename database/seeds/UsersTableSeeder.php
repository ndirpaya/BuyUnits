<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->first_name = "John";
        $user->last_name = "Doe";
        $user->email = "johndoe@buyunits.dev";
        $user->password = crypt("secret", "");
        $user->save();

    }
}

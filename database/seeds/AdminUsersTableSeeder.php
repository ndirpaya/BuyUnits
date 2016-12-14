<?php

use Illuminate\Database\Seeder;
use App\AdminUser;

class AdminUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user = new AdminUser();
        $user->first_name = "Jane";
        $user->last_name = "Doe";
        $user->email = "janedoe@buyunits.dev";
        $user->password = crypt("secret", "");
        $user->save();
    }
}

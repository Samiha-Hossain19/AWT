<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\user;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users =[
            [
                "name" =>"Samiha",
                "email" =>"hsamiha@gmail.comm",
                "password" =>"1234",
            ],
            [
                "name" =>"Sam",
                "email" =>"h@gmail.comm",
                "password" =>"1234",
            ],
            [
                "name" =>"Miha",
                "email" =>"samiha@gmail.comm",
                "password" =>"1234",
            ],
        ];
        foreach($users as $user){
            User::create($user);
        }
    }
}

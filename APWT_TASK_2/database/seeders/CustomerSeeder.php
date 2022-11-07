<?php

namespace Database\Seeders;
use App\Models\customer;


use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $customers =[
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
        foreach($customers as $customer){
            Customer::create($customer);
        }
    }
}

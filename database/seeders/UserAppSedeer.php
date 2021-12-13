<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;


class UserAppSedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

       $user = User::factory()->create(['name'=> 'rick',
                         'email'=> 'angel@gmial.com',
                          'password'=> bcrypt('betancourt77')]
        );

        $user->assignRole('admin');          
        

        

    }
}

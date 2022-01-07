<?php

namespace Database\Seeders;

use App\Models\User;
use App\UserApp;
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
                         'email'=> 'angelshamael@gmail.com',
                          'password'=> bcrypt('betancourt77')]
        );


        $user2 = User::factory()->create(['name'=> 'pilar',
        'email'=> 'paranrey1@outlook.es',
         'password'=> bcrypt('betancourt77')]
);

        $user->assignRole('admin_level3');     

        $user2->assignRole('admin_level2');

        
        User::factory(99)->create();

        

    }
}

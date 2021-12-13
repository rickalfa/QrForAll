<?php

namespace Database\Seeders;



use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Seeder;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
      $roleAdmin = Role::create(['name'=>'admin']);
      $roleUserfree =  Role::create(['name'=>'user_free']);

      Permission::create(['name'=> 'libros.index']);
      Permission::create(['name'=> 'libros.create']);
      Permission::create(['name'=> 'libros.store']);
      Permission::create(['name'=> 'libros.destroy']);
      Permission::create(['name'=> 'libros.edit']);
      Permission::create(['name'=> 'libros.update']);

      Permission::create(['name'=> 'categorias.index']);
      Permission::create(['name'=> 'categorias.show']);
      Permission::create(['name'=> 'categorias.create']);
      Permission::create(['name'=> 'categorias.store']);
      Permission::create(['name'=> 'categorias.destroy']);
      Permission::create(['name'=> 'categorias.edit']);
      Permission::create(['name'=> 'categorias.update']);

    }
}

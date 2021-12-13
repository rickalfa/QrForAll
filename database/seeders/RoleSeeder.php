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

      Permission::create(['name'=> 'libros.index'])->syncRoles([$roleAdmin]);
      Permission::create(['name'=> 'libros.show'])->syncRoles([$roleAdmin, $roleUserfree]);
      Permission::create(['name'=> 'libros.create'])->syncRoles([$roleAdmin]);
      Permission::create(['name'=> 'libros.store'])->syncRoles([$roleAdmin]);
      Permission::create(['name'=> 'libros.destroy'])->syncRoles([$roleAdmin]);
      Permission::create(['name'=> 'libros.edit'])->syncRoles([$roleAdmin]);
      Permission::create(['name'=> 'libros.update'])->syncRoles([$roleAdmin]);

      Permission::create(['name'=> 'categorias.index'])->syncRoles([$roleAdmin]);
      Permission::create(['name'=> 'categorias.show'])->syncRoles([$roleAdmin, $roleUserfree]);
      Permission::create(['name'=> 'categorias.create'])->syncRoles([$roleAdmin]);
      Permission::create(['name'=> 'categorias.store'])->syncRoles([$roleAdmin]);
      Permission::create(['name'=> 'categorias.destroy'])->syncRoles([$roleAdmin]);
      Permission::create(['name'=> 'categorias.edit'])->syncRoles([$roleAdmin]);
      Permission::create(['name'=> 'categorias.update'])->syncRoles([$roleAdmin]);

    }
}

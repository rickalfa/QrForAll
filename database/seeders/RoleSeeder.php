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
      $roleAdminLevel3 = Role::create(['name'=>'admin_level3']);
      $roleAdminLevel2 = Role::create(['name'=>'admin_level2']);
      $roleUserfree =  Role::create(['name'=>'user_free']);

      Permission::create(['name'=> 'libros.index'])->syncRoles([$roleAdminLevel3, $roleAdminLevel2]);
      Permission::create(['name'=> 'libros.show'])->syncRoles([$roleAdminLevel3, $roleUserfree]);
      Permission::create(['name'=> 'libros.create'])->syncRoles([$roleAdminLevel3, $roleAdminLevel2]);
      Permission::create(['name'=> 'libros.store'])->syncRoles([$roleAdminLevel3, $roleAdminLevel2]);
      Permission::create(['name'=> 'libros.destroy'])->syncRoles([$roleAdminLevel3]);
      Permission::create(['name'=> 'libros.edit'])->syncRoles([$roleAdminLevel3, $roleAdminLevel2]);
      Permission::create(['name'=> 'libros.update'])->syncRoles([$roleAdminLevel3, $roleAdminLevel2]);

      Permission::create(['name'=> 'categorias.index'])->syncRoles([$roleAdminLevel3, $roleAdminLevel2]);
      Permission::create(['name'=> 'categorias.show'])->syncRoles([$roleAdminLevel3, $roleUserfree]);
      Permission::create(['name'=> 'categorias.create'])->syncRoles([$roleAdminLevel3, $roleAdminLevel2]);
      Permission::create(['name'=> 'categorias.store'])->syncRoles([$roleAdminLevel3, $roleAdminLevel2]);
      Permission::create(['name'=> 'categorias.destroy'])->syncRoles([$roleAdminLevel3]);
      Permission::create(['name'=> 'categorias.edit'])->syncRoles([$roleAdminLevel3, $roleAdminLevel2]);
      Permission::create(['name'=> 'categorias.update'])->syncRoles([$roleAdminLevel3, $roleAdminLevel2]);

      Permission::create(['name'=> 'roles.index'])->syncRoles([$roleAdminLevel3]);
      Permission::create(['name'=> 'roles.show'])->syncRoles([$roleAdminLevel3]);
      Permission::create(['name'=> 'roles.create'])->syncRoles([$roleAdminLevel3]);
      Permission::create(['name'=> 'roles.update'])->syncRoles([$roleAdminLevel3]);
      Permission::create(['name'=> 'roles.store'])->syncRoles([$roleAdminLevel3]);
      Permission::create(['name'=> 'roles.destroy'])->syncRoles([$roleAdminLevel3]);

      Permission::create(['name'=> 'permissions.index'])->syncRoles([$roleAdminLevel3]);
      Permission::create(['name'=> 'permissions.show'])->syncRoles([$roleAdminLevel3]);
      Permission::create(['name'=> 'permissions.create'])->syncRoles([$roleAdminLevel3]);
      Permission::create(['name'=> 'permissions.update'])->syncRoles([$roleAdminLevel3]);
      Permission::create(['name'=> 'permissions.store'])->syncRoles([$roleAdminLevel3]);
      Permission::create(['name'=> 'permissions.destroy'])->syncRoles([$roleAdminLevel3]);

      Permission::create(['name'=> 'users.index'])->syncRoles([$roleAdminLevel3]);
      Permission::create(['name'=> 'users.show'])->syncRoles([$roleAdminLevel3]);
      Permission::create(['name'=> 'users.create'])->syncRoles([$roleAdminLevel3]);
      Permission::create(['name'=> 'users.update'])->syncRoles([$roleAdminLevel3]);
      Permission::create(['name'=> 'users.store'])->syncRoles([$roleAdminLevel3]);
      Permission::create(['name'=> 'users.destroy'])->syncRoles([$roleAdminLevel3]);

      Permission::create(['name'=> 'user-qrs.index'])->syncRoles([$roleAdminLevel3, $roleAdminLevel2]);
      Permission::create(['name'=> 'user-qrs.show'])->syncRoles([$roleAdminLevel3, $roleAdminLevel2]);
      Permission::create(['name'=> 'user-qrs.create'])->syncRoles([$roleAdminLevel3, $roleAdminLevel2]);
      Permission::create(['name'=> 'user-qrs.update'])->syncRoles([$roleAdminLevel3, $roleAdminLevel2]);
      Permission::create(['name'=> 'user-qrs.store'])->syncRoles([$roleAdminLevel3, $roleAdminLevel2]);
      Permission::create(['name'=> 'user-qrs.destroy'])->syncRoles([$roleAdminLevel3]);

    }
}

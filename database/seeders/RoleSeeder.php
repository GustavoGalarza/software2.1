<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role1 = Role::create(['name' => 'admin']);
        $role2 = Role::create(['name' => 'employee']);
        $role3 = Role::create(['name' => 'usuario']);

        Permission::create(['name' => 'index'])->syncRoles([$role1,$role2]);
        
        Permission::create(['name' => 'clientes.index'])->syncRoles([$role1,$role2]);
       
        Permission::create(['name' => 'clientes.show'])->syncRoles([$role1,$role2]);
      
        Permission::create(['name' => 'clientes.create'])->syncRoles([$role1,$role2]);
       
        Permission::create(['name' => 'clientes.edit'])->syncRoles([$role1,$role2]);;

        Permission::create(['name' => 'clientes.destroy'])->syncRoles([$role1,$role2]);;

        
    }
}
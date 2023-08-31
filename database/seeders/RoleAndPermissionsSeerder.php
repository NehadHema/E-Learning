<?php

namespace Database\Seeders;

// use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
// use Spatie\Permission\Models\Role;

class RoleAndPermissionsSeerder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create([
          "name"=>"create user",
          "guard-name"=>"web"
        ]);
        Permission::create([
            "name"=>"delete user",
            "guard-name"=>"web"
        ]);
        Permission::create([
            "name"=>"show user",
            "guard-name"=>"web"
        ]);
        Permission::create([
            "name"=>"show data",
            "guard-name"=>"web"
        ]);

        $super=Role::create([
            "name"=>"super admin",
            "guard-name"=>"web"
        ]);

        $admin=Role::create([
            "name"=>"admin",
            "guard-name"=>"web"
        ]);

        $user=Role::create([
            "name"=>"user",
            "guard-name"=>"web"
        ]);


        $super->givePermissionTo(['delete user','create user','show user','show data']);
        $admin->givePermissionTo(['show user','show data']);
        $user->givePermissionTo('show data');

    }
}

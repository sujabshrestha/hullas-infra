<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('roles')->insert(
        //     array('slug' => 'admin', 'name' => 'Admin')
        // );
        // DB::table('roles')->insert(
        //     array('slug' => 'editor', 'name' => 'Editor')
        // );

        $admin = Role::create([
            'name' => 'admin'
        ]);
        $adminpermission = Permission::create(['name' => 'Have overall access']);
        $admin->givePermissionTo($adminpermission);

        $user = Role::create([
            'name' => 'user'
        ]);
    }
}

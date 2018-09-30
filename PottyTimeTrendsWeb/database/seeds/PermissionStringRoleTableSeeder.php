<?php

use App\PermissionString;
use App\PermissionStringRole;
use App\Role;
use Illuminate\Database\Seeder;

class PermissionStringRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin_permission = new PermissionString(['value' => 'admin']);
        $admin_permission->save();
        $view_permission = new PermissionString(['value' => 'view']);
        $view_permission->save();
        $restore_permission = new Role(['name' => 'Recovery']);
        $restore_permission->save();

        // Administration permission
        $role = new Role(['name' => 'Admin']);
        $role->permission_strings()->attach($admin_permission);
        $role->permission_strings()->attach($view_permission);
        $role->permission_strings()->attach($restore_permission);
        $role->save();

        // Normal viewing permission, revoke to block user account
        $role = new Role(['name' => 'User']);
        $role->permission_strings()->attach($view_permission);
        $role->save();

        // Permission to restore soft deleted data
        $permission = new PermissionString(['value' => 'restore']);
        $role->permission_strings()->attach($view_permission);
        $role->permission_strings()->attach($restore_permission);
        $permission->save();
    }
}

<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Permission table always needs to exist with basic setup of values
        $this->call(PermissionStringRoleTableSeeder::class);
    }
}

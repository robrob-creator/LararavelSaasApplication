<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Spatie\Permission\Models\Role::create([
            'name'=>'user'
        ]);
        \Spatie\Permission\Models\Role::create([
            'name'=>'team_lead'
        ]);
        \Spatie\Permission\Models\Role::create([
            'name'=>'admin'
        ]);
    }
}

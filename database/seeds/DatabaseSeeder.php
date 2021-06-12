<?php

use Spatie\Permission\Models\Role;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesSeeder::class);


         if(app()->environment('production' )){ 
             //run proper seeders
         }else{
             $this->call(UserSeeder::class);
            //run our local seeders
         }
    }
}

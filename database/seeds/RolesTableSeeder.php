<?php

use App\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //To remove previous seeds
        Role::truncate();

        //Setting the seeds
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'auteur']);
        Role::create(['name' => 'utilisateur']);
    }
}

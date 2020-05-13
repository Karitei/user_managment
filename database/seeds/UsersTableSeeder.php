<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //To remove previous seeds
        User::truncate();

        //Remove roles of the users created previously
        DB::table('role_user')->truncate();

        //Setting the seeds
        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@email.com',
            'password' => Hash::make('admin')

        ]);

        $auteur = User::create([
            'name' => 'auteur',
            'email' => 'auteur@email.com',
            'password' => Hash::make('auteur')

        ]);

        $user = User::create([
            'name' => 'user',
            'email' => 'user@email.com',
            'password' => Hash::make('user')
        ]);

        //Getting created roles
        $adminRole = Role::where('name','admin')->first();
        $auteurRole = Role::where('name','auteur')->first();
        $utilisateurRole = Role::where('name','utilisateur')->first();

        //Attaching roles to each user
        $admin->roles()->attach($adminRole);
        $auteur->roles()->attach($auteurRole);
        $user->roles()->attach($utilisateurRole);
    }
}

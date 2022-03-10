<?php

namespace Database\Seeders;

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


       // $faker = Factory::create();

        for($i = 0; $i <= 10; $i++){
            User::create(
                [
                    'username' => 'Adilson',
                    'fullname' => 'Pina',
                    'email' => 'adilson.gditecnologia@gmail.com',
                    'password' => app('hash')->make('253647')
                ]
                );
        }

     // Model::unguard();
        // $this->call(UserTableSeeder::class);
     // Model::reguard();

        // $this->call('UsersTableSeeder');
    }
}

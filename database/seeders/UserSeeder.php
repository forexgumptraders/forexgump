<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'name' => 'Franco acqua',
        	'email' => 'eljirafo97@gmail.com',
        	'password' => bcrypt('1234')
        ])->assignRole('Admin');

        //  User::factory(1)->create();
    }
}

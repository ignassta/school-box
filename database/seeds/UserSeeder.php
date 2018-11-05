<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\
        DB::table('users')->insert([
            'user_type' => 'admin',
            'name' => 'master',
            'email' => 'master@master.lt',
            'phone' => 861234567,
            'password' => Hash::make('secret'),
        ]);
        DB::table('users')->insert([
            'user_type' => 'lecturer',
            'name' => 'Jonas Jonaitis',
            'email' => 'jonas@mail.lt',
            'phone' => 861234567,
            'password' => Hash::make('secret'),
        ]);
        DB::table('users')->insert([
            'user_type' => 'student',
            'name' => 'Petras Petraitis',
            'email' => 'petras@mail.lt',
            'phone' => 861234567,
            'password' => Hash::make('secret'),
        ]);
        DB::table('users')->insert([
            'user_type' => 'student',
            'name' => 'Juozas Juozaitis',
            'email' => 'juozas@mail.lt',
            'phone' => 861234567,
            'password' => Hash::make('secret'),
        ]);
    }
}

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
        DB::table('users')->insert([
            'name' => 'Peter Tiernan',
            'email' => 'ptiernan@gmail.com',
            'password' => Hash::make('password'),
        ]);
        DB::table('users')->insert([
            'name' => 'Maryse OMahony',
            'email' => 'maryse.mahony@gmail.com',
            'password' => Hash::make('password'),
        ]);
    }
}

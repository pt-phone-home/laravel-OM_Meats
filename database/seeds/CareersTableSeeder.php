<?php

use Illuminate\Database\Seeder;

class CareersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('careers')->insert([
            'title' => 'Sales Executive',
            'overview' => 'Come join our Sales Team',
            'details' => 'This role involves the following duties........',
        ]);
        DB::table('careers')->insert([
            'title' => 'Accounts Assistant',
            'overview' => 'Join our Accounts Team',
            'details' => 'This role involves the following duties........',
        ]);
    }
}

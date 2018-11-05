<?php

use Illuminate\Database\Seeder;

class LectureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\

        DB::table('lectures')->insert([
            'group_id' => 1,
            'date' => '2018-01-11',
            'title' => 'PHP pirma paskaita',
            'about' => 'Įžanga apie PHP'
        ]);
        DB::table('lectures')->insert([
            'group_id' => 1,
            'date' => '2018-01-12',
            'title' => 'PHP antra paskaita',
            'about' => 'PHP if else funkcijos'
        ]);
        DB::table('lectures')->insert([
            'group_id' => 3,
            'date' => '2018-02-14',
            'title' => 'Java pirma paskaita',
            'about' => 'Įžanga apie Java'
        ]);
    }
}

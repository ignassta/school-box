<?php

use Illuminate\Database\Seeder;

class FileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\

        DB::table('files')->insert([
                'lecture_id' => 1,
                'file' => 'link1',
                'title' => 'PHP paskaita nr1',
            ]);
        DB::table('files')->insert([
            'lecture_id' => 2,
            'file' => 'link2',
            'title' => 'PHP paskaita nr2',
        ]);
    }
}

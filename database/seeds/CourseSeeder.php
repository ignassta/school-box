<?php

use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\

        DB::table('courses')->insert([
            'user_id' => 2,
            'title' => 'PHP',
            ]);
        DB::table('courses')->insert([
            'user_id' => 2,
            'title' => 'Front End',
        ]);
        DB::table('courses')->insert([
            'user_id' => 2,
            'title' => 'Java',
        ]);
        DB::table('courses')->insert([
            'user_id' => 2,
            'title' => 'Java Script',
        ]);
    }
}

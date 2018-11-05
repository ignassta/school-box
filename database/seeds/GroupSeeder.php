<?php

use Illuminate\Database\Seeder;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\

        DB::table('groups')->insert([
                'course_id' => 1,
                'user_id' => 2,
                'title' => 'PHP 2018-01',
                'starts' => '2018-01-10',
                'ends' => '2018-03-10'
            ]);
        DB::table('groups')->insert([
            'course_id' => 1,
            'user_id' => 2,
            'title' => 'PHP 2018-02',
            'starts' => '2018-02-10',
            'ends' => '2018-04-10'
        ]);
        DB::table('groups')->insert([
            'course_id' => 3,
            'user_id' => 2,
            'title' => 'Java 2018-02',
            'starts' => '2018-02-13',
            'ends' => '2018-04-13'
        ]);
    }
}

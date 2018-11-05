<?php

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
        $this->call(CourseSeeder::class);
        $this->call(FileSeeder::class);
        $this->call(GroupSeeder::class);
        $this->call(LectureSeeder::class);
        $this->call(UserSeeder::class);
    }
}

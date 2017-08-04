<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(CollegeSeeder::class);
        $this->call(CourseSeeder::class);
        $this->call(ProgramSeeder::class);
        $this->call(StudentSeeder::class);
    }
}

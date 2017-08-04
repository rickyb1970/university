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
        //
        DB::table('courses')->insert(['courseid'=>'IT01','coursename'=>'Computer Concepts']);
        DB::table('courses')->insert(['courseid'=>'IT120','coursename'=>'Applications Software']);
        DB::table('courses')->insert(['courseid'=>'IT312','coursename'=>'Computer Networks 1']);
        DB::table('courses')->insert(['courseid'=>'ITELEC1A','coursename'=>'Web Applications Development (Basic)']);
        DB::table('courses')->insert(['courseid'=>'ITELEC1B','coursename'=>'Mobile Applications Development (Basics)']);
        DB::table('courses')->insert(['courseid'=>'ITELEC1C','coursename'=>'2D Animations']);
        DB::table('courses')->insert(['courseid'=>'ITELEC2A','coursename'=>'Web Applications Development (Advanced)']);
        DB::table('courses')->insert(['courseid'=>'ITELEC2B','coursename'=>'Mobile Applications Development (Advanced)']);
        DB::table('courses')->insert(['courseid'=>'ITELEC2C','coursename'=>'3D Modeling']);
        DB::table('courses')->insert(['courseid'=>'IT322','coursename'=>'Computer Networks 2']);
        DB::table('courses')->insert(['courseid'=>'IT412','coursename'=>'Special IT Project']);
    }
}

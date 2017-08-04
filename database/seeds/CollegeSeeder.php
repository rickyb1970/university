<?php

use Illuminate\Database\Seeder;

class CollegeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('colleges')->insert(['collegeid'=>'C001','collegename'=>'College of Engineering','collegesname'=>'COEng']);
        DB::table('colleges')->insert(['collegeid'=>'C002','collegename'=>'College of Commerce','collegesname'=>'COC']);
        DB::table('colleges')->insert(['collegeid'=>'C003','collegename'=>'College of Arts and Sciences','collegesname'=>'COA']);
        DB::table('colleges')->insert(['collegeid'=>'C004','collegename'=>'College of Information, Computer and Communications Technology','collegesname'=>'CICCT']);
        DB::table('colleges')->insert(['collegeid'=>'C005','collegename'=>'College of Nursing','collegesname'=>'CON']);
        DB::table('colleges')->insert(['collegeid'=>'C006','collegename'=>'College of Education','collegesname'=>'COE']); 
        DB::table('colleges')->insert(['collegeid'=>'C007','collegename'=>'College of Law','collegesname'=>'Law']);                
        DB::table('colleges')->insert(['collegeid'=>'C008','collegename'=>'Graduate School','collegesname'=>'GS']); 
    }
}

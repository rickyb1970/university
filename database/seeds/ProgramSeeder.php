<?php

use Illuminate\Database\Seeder;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('programs')->insert(['programid'=>'P0001','programname'=>'Bachelor of Science in Information Technology','programsname'=>'BSIT','pcollegeid'=>'C004']);
        DB::table('programs')->insert(['programid'=>'P0002','programname'=>'Bachelor of Science in Computer Science','programsname'=>'BSCS','pcollegeid'=>'C004']);
        DB::table('programs')->insert(['programid'=>'P0003','programname'=>'Bachelor of Science in Information Systems','programsname'=>'BSIS','pcollegeid'=>'C004']);
        DB::table('programs')->insert(['programid'=>'P0004','programname'=>'Bachelor of Science in Accountancy','programsname'=>'BSA','pcollegeid'=>'C002']);
        DB::table('programs')->insert(['programid'=>'P0005','programname'=>'Bachelor of Science in Business Administration','programsname'=>'BSBA','pcollegeid'=>'C002']);
        DB::table('programs')->insert(['programid'=>'P0006','programname'=>'Bachelor of Science in Finance','programsname'=>'BSFin','pcollegeid'=>'C002']);
    }
}

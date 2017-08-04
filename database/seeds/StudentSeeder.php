<?php

use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $students = [
          ['studentid'=>'1001','studentfname'=>'Roderick','studentlname'=>'Bandalan','studentyear'=>'2','sprogramid'=>'P0002','scollegeid'=>'C004'],
          ['studentid'=>'1002','studentfname'=>'John Leeroy','studentlname'=>'Gadiane','studentyear'=>'1','sprogramid'=>'P0002','scollegeid'=>'C004'],
          ['studentid'=>'1003','studentfname'=>'Eric','studentlname'=>'Magto','studentyear'=>'3','sprogramid'=>'P0002','scollegeid'=>'C004'],
          ['studentid'=>'1004','studentfname'=>'Gene','studentlname'=>'Abello','studentyear'=>'4','sprogramid'=>'P0002','scollegeid'=>'C004'],
          ['studentid'=>'1005','studentfname'=>'Roy Adrian','studentlname'=>'Salares','studentyear'=>'2','sprogramid'=>'P0002','scollegeid'=>'C004'],
          ['studentid'=>'1006','studentfname'=>'Mark Cedric','studentlname'=>'Antonino','studentyear'=>'3','sprogramid'=>'P0002','scollegeid'=>'C004'],
          ['studentid'=>'1007','studentfname'=>'Joeffrey','studentlname'=>'Gudio','studentyear'=>'4','sprogramid'=>'P0002','scollegeid'=>'C004'],
        ];

        DB::table('students')->insert($students);
    }
}

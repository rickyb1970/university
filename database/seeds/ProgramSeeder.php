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
        DB::table('programs')->insert(['programid'=>'P0007','programname'=>'Bachelor of Science in Management Accounting','programsname'=>'BSMA','pcollegeid'=>'C002']);
        DB::table('programs')->insert(['programid'=>'P0008','programname'=>'Bachelor of Science in Mechanical Engineering','programsname'=>'BSME','pcollegeid'=>'C001']);
        DB::table('programs')->insert(['programid'=>'P0009','programname'=>'Bachelor of Science in Electronics Engineering','programsname'=>'BSEcE','pcollegeid'=>'C001']);
        DB::table('programs')->insert(['programid'=>'P0010','programname'=>'Bachelor of Science in Electrical Engineering','programsname'=>'BSEE','pcollegeid'=>'C001']);
        DB::table('programs')->insert(['programid'=>'P0011','programname'=>'Bachelor of Science in Computer Engineering','programsname'=>'BSCpE','pcollegeid'=>'C001']);
        DB::table('programs')->insert(['programid'=>'P0012','programname'=>'Bachelor of Science in Industrial Engineering','programsname'=>'BSIE','pcollegeid'=>'C001']);
        DB::table('programs')->insert(['programid'=>'P0013','programname'=>'Bachelor of Science in Civil Engineering','programsname'=>'BSCE','pcollegeid'=>'C001']);
        DB::table('programs')->insert(['programid'=>'P0014','programname'=>'Bachelor of Science in Chemical Engineering','programsname'=>'BSChE','pcollegeid'=>'C001']);
        DB::table('programs')->insert(['programid'=>'P0015','programname'=>'Bachelor of Arts in Mass Communications','programsname'=>'AB Masscom','pcollegeid'=>'C003']);
        DB::table('programs')->insert(['programid'=>'P0016','programname'=>'Bachelor of Arts in Liaison and Communications','programsname'=>'AB Liacom','pcollegeid'=>'C003']);
        DB::table('programs')->insert(['programid'=>'P0017','programname'=>'Bachelor of Arts in History','programsname'=>'AB History','pcollegeid'=>'C003']);
        DB::table('programs')->insert(['programid'=>'P0018','programname'=>'Bachelor of Science in Psychology','programsname'=>'BSPsych','pcollegeid'=>'C003']);
        DB::table('programs')->insert(['programid'=>'P0019','programname'=>'Bachelor of Arts in Political Science','programsname'=>'AB PolSci','pcollegeid'=>'C003']);
        DB::table('programs')->insert(['programid'=>'P0020','programname'=>'Bachelor of Arts in Sociology','programsname'=>'AB Socio','pcollegeid'=>'C003']);
        DB::table('programs')->insert(['programid'=>'P0021','programname'=>'Bachelor of Arts in Philosophy','programsname'=>'AB Philo','pcollegeid'=>'C003']);
    }
}

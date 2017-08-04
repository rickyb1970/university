<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\College;
use App\Program;
use App\Student;

class SimpleController extends Controller
{
    //
    public function showProgram($id){
         $object = new Program;

         $program = $object->find($id);
  
         echo 'Program ID: ',$program->programid,'<br>';
         echo 'Program Name: ',$program->programname,'<br>';
         echo 'College Name: ',$program->programCollege->collegename,'<br>';	          
    }

    public function showPrograms(){
    	$object = new Program;

    	$programs = $object->get();

    	foreach($programs as $program){
    		echo $program->programid,' ';
    		echo $program->programname,' ';
    		echo $program->programsname,' ';
    		echo $program->programCollege->collegename,'<br>';
    	}
    }

    public function showStudents(){
          $object = new Student;

          $students = $object->get();

          foreach($students as $student){
             echo 'Student ID: ',$student->studentid,'<br>';
             echo 'First Name: ',$student->studentfname,'<br>';
             echo 'Last Name: ',$student->studentlname,'<br>';
             echo 'Year: ',$student->studentyear,'<br>';
             echo 'Program: ',$student->sProgram->programname,'<br>';
             echo 'College: ',$student->sCollege->collegename,'<br>';
             echo '=============================<br>'; 
          }
    }

    public function showStudent($studID){
         $object = new Student;

         $student = $object->findOrFail($studID);
             echo 'Student ID: ',$student->studentid,'<br>';
             echo 'First Name: ',$student->studentfname,'<br>';
             echo 'Last Name: ',$student->studentlname,'<br>';
             echo 'Year: ',$student->studentyear,'<br>';
             echo 'Program: ',$student->sProgram->programname,'<br>';
             echo 'College: ',$student->sCollege->collegename,'<br>';
             echo '<hr>';

    }

    public function showCollegeInfo($collid){
        $college = new College;

        $selectedCollege = $college->find($collid);

        echo "College ID: ",$selectedCollege->collegeid,'<br>';
        echo "College Name: ",$selectedCollege->collegename,'<br>';
        echo "College Programs:<br>";
        $programs = $selectedCollege->collegePrograms;
         
        foreach($programs as $program){ 
            echo "Program Code: ",$program->programid,'<br>';
            echo "Program Name: ",$program->programname,'<br>';  
        } 
    }
}

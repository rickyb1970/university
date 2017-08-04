<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Program;
use App\College;

class Student extends Model
{
    //
    public $timestamps = false;
    protected $primaryKey = 'studentid';
    public $incrementing = false;

    protected $fillable = [
        'studentid', 'studentfname', 'studentmname','studentlname','studentyear','sprogramid','scollegeid'
    ];

    public function sProgram(){
          return $this->hasOne('App\Program','programid','sprogramid');
    } 

    public function sCollege(){
          return $this->hasOne('App\College','collegeid','scollegeid');
    }
     

}

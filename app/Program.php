<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Student;
use App\College;

class Program extends Model
{
    //
    protected $primaryKey = 'programid';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'programid', 'programname', 'programsname','pcollegeid'
    ];    

    public function programStudents(){
    	return $this->hasMany('App\Student','sprogramid','program');
    }

    public function programCollege(){
    	 return $this->belongsTo('App\College','pcollegeid','collegeid');

        //return belongsTo(College::class);
    }
}

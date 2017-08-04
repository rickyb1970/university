<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Support\Facades\DB;


class College extends Model
{
    //
    public $timestamps = false;
    protected $primaryKey = 'collegeid';
    public $incrementing = false;

    protected $fillable = [
        'collegeid', 'collegename', 'collegesname','collegedescription'
    ];    


    public function collegePrograms(){
    	return $this->hasMany('App\Program','pcollegeid','collegeid');
    }
}

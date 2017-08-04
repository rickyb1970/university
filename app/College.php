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

    public function programs(){
    	return $this->hasMany('App\Program','pcollegeid','collegeid')->orderBy('programname');
    }
}

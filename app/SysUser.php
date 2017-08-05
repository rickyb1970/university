<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\SysRole;

class SysUser extends Model
{
    //
    public $timestamps = false;

    protected $primaryKey = 'userid';

    protected $fillable = [
           'userid','username','userpassword','uroleid' 
    ];

    public function roles(){
        return $this->belongsToMany('App\SysRole');
    }
}

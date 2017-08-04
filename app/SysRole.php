<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\SysUser;

class SysRole extends Model
{
    //
    public $timestamps = false;
    protected $primaryKey = 'roleid';

    protected $fillable = [
          'roleid','roletype','roledescription'
    ];

    public function roleAssigned(){
    	return $this->hasMany('SysUser','uroleid','roleid');
    }
}

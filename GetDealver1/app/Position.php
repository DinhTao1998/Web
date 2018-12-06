<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    protected $table = "position";
     public function account() {
    	return $this -> hasmany('app\User','pos_id','id');
    }
}

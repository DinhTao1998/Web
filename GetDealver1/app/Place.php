<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    protected $table = "place";
     public function product() {
    	return $this -> hasmany('app\Product','place','id');
    }
}

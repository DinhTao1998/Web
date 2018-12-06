<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    protected $table = "producttype";
    public function product() {
    	return $this -> hasmany('app\Product','type_product','id');
    }
}

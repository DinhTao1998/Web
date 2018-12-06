<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "product";
    public function product_type(){
    	return $this ->belongTo('app\ProductType','type_product','id');
    }
    public function place(){
    	return $this ->belongTo('app\Place','place','id');
    }
}

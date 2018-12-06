<?php

namespace App\Http\Controllers;
use App\Product;
use App\ProductType;
// use App\Place;
use Illuminate\Http\Request;


class GetDealController extends Controller
{
    //
    public function getIndex(){
        $product_type = ProductType::All();

    	return view('page.landing',compact('product_type'));
    }
    public function getHome(){
    	// $product = Product::where('place',1)-> get();
    	$product = Product::paginate(28);
    	// $place = Place::all();
        // dd($place);
    	return view('page.home',compact('product','place'));
    }
    public function getSearch(request $req){
         $key_search = $req->key;
             # code...
        $product = Product::where('product_name','like','%'.$req->key.'%')->orderBy('price','asc')->take(100)->paginate(10);
       
        return view('page.search',['product'=>$product,'key_search'=>$key_search]);
    }
}
?>

<?php

namespace App\Http\Controllers;
use App\Product;
use App\ProductType;
use App\Place;
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
        if(strpos($req->key, ' ')!==false)
        $req->key = str_replace(" ", '%',$req->key);
             # code...
        $product = Product::where('product_name','like','%'.$req->key.'%')->orderBy('price','asc')->take(100)->paginate(40);
        $count = sizeof( Product::where('product_name','like','%'.$req->key.'%')->orderBy('price','asc')->get());
        $product_type = ProductType::all();
        $pr_location = Product::select('location')->distinct()->get();
        $place = Place::all();
       
        return view('page.search',compact('product','key_search','product_type','pr_location','place','count'));
    }
    // su dung cho search bang fillter
     public function getSearch1(request $req){
        // $pro = $req->pro;
        // $place = $req->place;
        // $local = $req ->local;
        // if($pro == null)
        //     $pro ='';
        // if($local == null)
        //     $local ='';
        // if($place == null)
        //     $place ='';
        // dd($local);
         $key_search = $req->key;
         $count;
         $product;
         if($req->pro==null)
         {
            if($req->place==null)
            {
                if($req->local==null)
                {
                    $count = sizeof(Product::all());
                    $product=Product::paginate(20);
                }
                else
                {
                    $count = sizeof(Product::where('location',$req->local)->get());
                    $product=Product::where('location',$req->local)->orderBy('price','asc')->paginate(100);
                }
            }
            else
            {
                if($req->local ==null)
                {
                     $count = sizeof(Product::where('place',$req->place)->get());
                    $product=Product::where('place',$req->place)->orderBy('price','asc')->paginate(100);
                }
                else
                {
                    $count = sizeof(Product::where('place',$req->place)->where('location',$req->local)->get());
                    $product=Product::where('place',$req->place)->where('location',$req->local)->orderBy('price','asc')->paginate(100);
                }
            }
         }
         else
         {
            if($req->place ==null)
            {
                if($req->local==null)
                {

                    $count = sizeof(Product::where('type_product',$req->pro)->get());
                    $product=Product::where('type_product',$req->pro)->orderBy('price','asc')->paginate(100);
                }
                else
                {
                    $count = sizeof(Product::where('type_product',$req->pro)->where('location',$req->local)->get());
                    $product=Product::where('type_product',$req->pro)->where('location',$req->local)->orderBy('price','asc')->paginate(100);
                }
            }
            else
            {
                if($req->local==null)
                {
                    $count = sizeof(Product::where('type_product',$req->pro)->where('place',$req->place)->get());
                    $product=Product::where('type_product',$req->pro)->where('place',$req->place)->orderBy('price','asc')->paginate(100);
                }
                else
                {
                    $count = sizeof(Product::where('type_product',$req->pro)->where('location',$req->local)->where('place',$req->place)->get());
                    $product=Product::where('type_product',$req->pro)->where('location',$req->local)->where('place',$req->place)->orderBy('price','asc')->paginate(100);
                }
            }
         }

             # code...
        // $count = sizeof(Product::where('type_product',$pro)->where('place',$req->place)->get());
        // $product = Product::where('type_product',$pro)->where('place',$req->place)->where('location',$req->local)->orderBy('price','asc')->paginate(20);
        $product_type = ProductType::all();
        $pr_location = Product::select('location')->distinct()->get();
        $place = Place::all();
       
        return view('page.search',compact('product','key_search','product_type','pr_location','place','count'));
    }
    public function filtersearch(request $request)
    {
        $pro = $req->pro;
        $place = $req->place;
        $local = $req ->local;
        if($pro == null)
            $pro ='';
        if($local == null)
            $local ='';
        if($place == null)
            $place ='';
        $key_search = $req->key;
        $count = sizeof(Product::where('type_product',$pro)->where('location',$local)->where('place',$place)->get());
        $product=Product::where('type_product',$pro)->where('location',$local)->where('place',$place)->orderBy('price','asc')->paginate(100);
        return view('page.filtersearch',compact('product','count','key_search'));

    }
}
?>

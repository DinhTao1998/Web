<?php

namespace App\Http\Controllers;
use App\Product;
use App\ProductType;
use App\Place;
use App\Email;
// use App\Place;
use Illuminate\Http\Request;


class GetDealController extends Controller
{
    //
    public function getIndex(){
        $product_type = ProductType::All();

    	return view('landingpage.index',compact('product_type'));
    }
    public function getHome(){
    	// $product = Product::where('place',1)-> get();
    	$product = Product::paginate(28);
    	// $place = Place::all();
        // dd($place);
    	return view('page.home',compact('product','place'));
    }
    public function getSearch(request $req){
        $noiban ='1000';
        $key_search = $req->key;
        if(strpos($req->key, ' ')!==false)
        $req->key = str_replace(" ", '%',$req->key);
             # code...
        $product = Product::where('product_name','like','%'.$req->key.'%')->orderBy('price','asc')->take(100)->paginate(40);
        $count = sizeof( Product::where('product_name','like','%'.$req->key.'%')->orderBy('price','asc')->get());
        $product_type = ProductType::all();
        $pr_location = Product::select('location')->distinct()->get();
        $place = Place::all();
       
        return view('page.search',compact('product','key_search','product_type','pr_location','place','count','noiban'));
    }
    public function getResult($key_search ){
        if(strpos($key_search, ' ')!==false)
        $key_search = str_replace(" ", '%',$key_search);
             # code...
        $product = Product::where('product_name','like','%'.$key_search.'%')->orderBy('price','asc')->take(100)->paginate(40);
        return view('page.result',compact('product','key_search'));
    }
    public function getFindResult($key_search ){
        if(strpos($key_search, ' ')!==false)
        $key_search = str_replace(" ", '%',$key_search);
             # code...
        $product =sizeof(Product::where('product_name','like','%'.$key_search.'%')->orderBy('price','asc')->get());
        echo "<span>Có <b>".$product."</b> kết quả trong mỹ phẩm</span>";
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

    public function getSearchLanding(request $req){
        $key_search =$req->tensp;
        $noiban='flag';
        if(strpos($key_search, ' ')!==false)
        $req->key = str_replace(" ", '%',$req->key);
        if($req->noiban =='tiki')
            $noiban ='1';
        if($req->noiban =='hasaki')
            $noiban ='4';
        if($req->noiban =='lazada')
            $noiban ='3';
        // if($req->noiban ==null)
        //     $noiban == null;
        // dd($noiban);
        if($key_search != null)
        {
            if($noiban != 'flag')
            {
                $product = Product::where('product_title','like','%'.$key_search.'%')->where('place','1')->orderBy('price','asc')->paginate(40);
            }
            else
            {
                 $product = Product::where('product_title','like','%'.$key_search.'%')->orderBy('price','asc')->paginate(40);
            }
        }
        else{
             $product = Product::where('place',$noiban)->orderBy('price','asc')->paginate(40);
        }
        $count = sizeof( Product::where('product_name','like','%'.$req->tensp.'%')->orderBy('price','asc')->get());
        $product_type = ProductType::all();
        $pr_location = Product::select('location')->distinct()->get();
        $place = Place::all();
        // dd($product);
       
        return view('page.search',compact('product','key_search','product_type','pr_location','place','count','noiban'));
    }
    public function getGioiThieu(){
        return view('landingpage.gioithieu');
    }

     public function getLienHe(){
        return view('landingpage.lienhe');
    }
     public function postLienHe(request $req){
        $name = $req->fullname;
        $email =$req->email;
        $phone = $req->phone;
        $content = $req->content;
        $date = date('Y-m-d H:i:s');
        // dd($name,$email,$phone,$req->content,$date);
        Email::insert(['name'=>$name,'email'=>$email, 'phone'=>$phone,'content'=>$content,'created_at'=>$date,'updated_at'=>$date,'status'=>'0']);
        return view('landingpage.index');
    }
}
?>

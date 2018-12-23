<?php

namespace App\Http\Controllers;
use App\Product;
use App\ProductType;
use App\Place;
// use App\Place;
use Illuminate\Http\Request;


class AjaxController extends Controller
{
    
    // public function filterSearch($pro,$local,$place){
    //     if($pro==null)
    //      {
    //         if($place==null)
    //         {
    //             if($local==null)
    //             {
    //                 $product=Product::paginate(20);
    //             }
    //             else
    //             {
    //                 $product=Product::where('location',$local)->orderBy('price','asc')->paginate(100);
    //             }
    //         }
    //         else
    //         {
    //             if($local ==null)
    //             {

    //                 $product=Product::where('place',$place)->orderBy('price','asc')->paginate(100);
    //             }
    //             else
    //             {
                    
    //                 $product=Product::where('place',$place)->where('location',$local)->orderBy('price','asc')->paginate(100);
    //             }
    //         }
    //      }
    //      else
    //      {
    //         if($place ==null)
    //         {
    //             if($local==null)
    //             {


    //                 $product=Product::where('type_product',$pro)->orderBy('price','asc')->paginate(100);
    //             }
    //             else
    //             {

    //                 $product=Product::where('type_product',$pro)->where('location',$local)->orderBy('price','asc')->paginate(100);
    //             }
    //         }
    //         else
    //         {
    //             if($local==null)
    //             {
    //                 $product=Product::where('type_product',$pro)->where('place',$place)->orderBy('price','asc')->paginate(100);
    //             }
    //             else
    //             {

    //                 $product=Product::where('type_product',$pro)->where('location',$local)->where('place',$place)->orderBy('price','asc')->paginate(100);
    //             }
    //         }
    //      }
    //      foreach($product as $pro)
    //      {
    //        echo "<div class='col-lg-3 col-md-4 col-xs-12 col-sm-6 mb-4'>
                                  
    //                                 <div class='card h-100'>
    //                                   <a href='".$pro->link."'>
    //                                     <div class='card-img' style='height: 211.75px;'>
    //                                         <img class='card-img-top' src='".$pro->image."' alt='' style='max-height:212px'></a>  
    //                                     </div>
                                        
    //                                     <div class='card-body'>
                                            
    //                                         <h4 class='card-title'>
    //                                             <a href='".$pro->link."' >".$pro->product_name."</a>
    //                                         </h4>
    //                                         <span class='final-price'>".$pro->price."đ</span><span class='price-regular'>".$pro->cost."đ</span><span class='sale-tag'>-".$pro->sale."</span>
    //                                         <p class='card-text'></p>
    //                                     </div>
    //                                             <div class='card-footer'>
    //                                         <small class='text-muted'>".$pro->localtion."</small>
    //                                         <img class='img-src' src='".$pro->image."'>
    //                                     </div>
    //                                     </div>
    //                                 </div>"
    //                             }
        
    // }
    public function filterSearch($key,$local,$place){
        if($key=='flag')
            $key = '%';
        else
        $key=str_replace(" ", '%',$key);
        if($place=='flag')
            $place = '%';
        if($local=='flag')
            $local = '%';
        $product =Product::where('location','like','%'.$local.'%')->where('product_title','like','%'.$key.'%')->where('place','like','%'.$place.'%')->orderBy('price','asc')->get();
        echo "<div class='row'>";
         foreach($product as $pro)
         {
            if($pro->cost != null)
             echo "<div class='col-lg-3 col-md-4 col-xs-12 col-sm-6 mb-4'>

             <div class='card h-100'>
             <a href='".$pro->link."'>
             <div class='card-img' style='height: 211.75px;'>
             <img class='card-img-top' src='".$pro->image."' alt='' style='max-height:212px'></a>  
             </div>

             <div class='card-body'>

             <h4 class='card-title'>
             <a href='".$pro->link."' >".$pro->product_name."</a>
             </h4>
             <span class='final-price'>".number_format($pro->price)."đ</span><span class='price-regular'>".number_format((float)$pro->cost)."đ</span><span class='sale-tag'>-".$pro->sale."</span>
             <p class='card-text'></p>
             </div>
             <div class='card-footer'>
             <small class='text-muted'>".$pro->location."</small>
             <img class='img-src' src='".$pro->place_image."'>
             </div>
             </div>
             </div>";
             else
                echo "<div class='col-lg-3 col-md-4 col-xs-12 col-sm-6 mb-4'>

             <div class='card h-100'>
             <a href='".$pro->link."'>
             <div class='card-img' style='height: 211.75px;'>
             <img class='card-img-top' src='".$pro->image."' alt='' style='max-height:212px'></a>  
             </div>

             <div class='card-body'>

             <h4 class='card-title'>
             <a href='".$pro->link."' >".$pro->product_name."</a>
             </h4>
             <span class='final-price'>".number_format($pro->price)."đ</span><span class='price-regular'>".$pro->cost."</span><span class='sale-tag'>".$pro->sale."</span>
             <p class='card-text'></p>
             </div>
             <div class='card-footer'>
             <small class='text-muted'>".$pro->location."</small>
             <img class='img-src' src='".$pro->place_image."'>
             </div>
             </div>
             </div>";
        }
    }
     public function searchResult($key,$local,$place){
        if($key=='flag')
            $key = '%';
        else
        $key=str_replace(" ", '%',$key);
        if($place=='flag')
            $place = '%';
        if($local=='flag')
            $local = '%';
        $product =sizeof(Product::where('location','like','%'.$local.'%')->where('product_title','like','%'.$key.'%')->where('place','like','%'.$place.'%')->get());
        echo "<span>Có <b>".$product."</b> kết quả trong mỹ phẩm</span>";
        
    }
}
?>

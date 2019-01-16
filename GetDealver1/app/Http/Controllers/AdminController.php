<?php

namespace App\Http\Controllers;
use App\Product;
use App\ProductType;
use App\Place;
// use App\Place;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function getLayout(){
        $product_type = ProductType::count();
        $product = Product::count();
        return view('admin.bangdieukhien',compact('product_type','product'));
    }
    public function getDanhMuc(){
        $product_type = ProductType::all();
        return view('admin.danhmuc',compact('product_type'));
    }
    public function getDanhSachSanPham(){
        $product = Product::paginate(20);
        return view('admin.quanlisanpham',compact('product'));
    }
    public function getThemDanhMuc($ten,$hinh ){
        ProductType::insert(['product_type_name'=>$ten,'image'=> $hinh]);
        $product_type = ProductType::all();
        return view('admin.danhmuc',compact('product_type'));
    }

    public function getXoaDanhMuc($id){
        ProductType::where('id',$id)->delete();
        $product_type = ProductType::all();
        return view('admin.danhmuc',compact('product_type'));
    }


}
?>

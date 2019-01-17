<?php

namespace App\Http\Controllers;
use App\Product;
use App\ProductType;
use App\Place;
use App\User;
// use App\Place;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



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

    public function getSuaDanhMuc(request $req){
        $id =$req->btnEdit;
        $product = ProductType::where('id',$id)->get();
        return view('admin.suadanhmuc', compact('product'));
    }
    public function getEditDoneDanhMuc(request $req){
        $id =$req->madm;
        $name =$req->tendanhmuc;
        $image = $req->image;
        ProductType::where('id',$id)->update(['product_type_name'=>$name,'image'=>$image]);
        $product_type = ProductType::all();
        return view('admin.danhmuc',compact('product_type'));
    }

    public function getDangNhap()
    {
        // return view('dangnhap.login');
        $tk = User::all();
        return view('dangnhap.login', compact('tk'));
    }

    public function postDangNhap(request $request)
    {
        $this->validate($request,[
            'email' => 'required',
            'password' => 'required |min:3 |max:32'
        ],[
            'email.required' => 'Bạn chưa nhập email',
            'password.required' => 'Bạn chưa nhập password',
            'password.min' => 'Password không được nhỏ hơn 3 kí tự',
            'password.max' => 'Password phải nhỏ hơn 32 kí tự',
        ]);

        if(Auth::attempt(['email'=> $request->email, 'password' => $request->password]))
        {
            return redirect('admin/trangchu');
        }
        else
            return redirect('admin/dangnhap')->with(['thongbao' => 'Đăng nhập không thành công']);
    }
}

?>

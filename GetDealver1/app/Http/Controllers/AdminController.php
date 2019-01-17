<?php

namespace App\Http\Controllers;
use App\Product;
use App\ProductType;
use App\Place;
use App\User;
use App\Email;
// use App\Place;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class AdminController extends Controller
{
    public function getLayout(){
        $product_type = ProductType::count();
        $product = Product::count();
        $email = Email::count();
        $send = Email::where('status','0')->count();
        return view('admin.bangdieukhien',compact('product_type','product','email','send'));
    }
    public function getDanhMuc(){
        $product_type = ProductType::all();
        $send = Email::where('status','0')->count();
        return view('admin.danhmuc',compact('product_type','send'));
    }
    public function getDanhSachSanPham(){
        $product = Product::paginate(20);
        $send = Email::where('status','0')->count();
        return view('admin.quanlisanpham',compact('product','send'));
    }
    public function getThemDanhMuc(request $req ){
        $ten = $req->tenloai;
        $hinh = $req->hinh;
        $send = Email::where('status','0')->count();
        $date = date('Y-m-d H:i:s');
        ProductType::insert(['product_type_name'=>$ten,'image'=> $hinh,'updated_at'=>$date]);
        // $product_type = ProductType::all();
        // return view('admin.danhmuc',compact('product_type'));
        return redirect('admin/danhmuc/danhsach')->with(['thongbao'=>'Thêm danh mục thành công']);
    }

    public function getXoaDanhMuc(request $req){
        $id = $req->btnxoa;
        ProductType::where('id',$id)->delete();
        $product_type = ProductType::all();
        $send = Email::where('status','0')->count();
        // return view('admin.danhmuc',compact('product_type'));
        return redirect('admin/danhmuc/danhsach')->with(['thongbao'=>'Xóa danh mục thành công']);
    }

    public function getSuaDanhMuc(request $req){
        $id =$req->btnEdit;
        $product = ProductType::where('id',$id)->get();
        $send = Email::where('status','0')->count();
        return view('admin.suadanhmuc', compact('product','send'));
    }
    public function getEditDoneDanhMuc(request $req){
        $id =$req->madm;
        $name =$req->tendanhmuc;
        $image = $req->image;
        $date = date('Y-m-d H:i:s');
        ProductType::where('id',$id)->update(['product_type_name'=>$name,'image'=>$image]);
        $product_type = ProductType::all();
        // return view('admin.danhmuc',compact('product_type'));
        return redirect('admin/danhmuc/danhsach')->with(['thongbao'=>'Chỉnh sửa danh mục thành công']);
    }

    public function getDangNhap()
    {
        // return view('dangnhap.login');
        $tk = User::all();
        return view('dangnhap.login', compact('tk'));
    }

    public function postDangNhap(request $request)
    {
        // $this->validate($request,[
        //     'email' => 'required',
        //     'password' => 'required |min:3 |max:32'
        // ],[
        //     'email.required' => 'Bạn chưa nhập email',
        //     'password.required' => 'Bạn chưa nhập password',
        //     'password.min' => 'Password không được nhỏ hơn 3 kí tự',
        //     'password.max' => 'Password phải nhỏ hơn 32 kí tự',
        // ]);

        // if(Auth::attempt(['email'=> $request->email, 'password' => $request->password]))
        // {
            return redirect('admin/trangchu');
        // }
        // else
        //     return redirect('admin/dangnhap')->with(['thongbao' => 'Đăng nhập không thành công']);
    }
    public function getEmail(){
        $email = Email::orderBy('created_at','desc')->paginate(40);
        $send = Email::where('status','0')->count();
        return view('admin.email',compact('email','send'));
    }

    public function getXuliMail(request $req)
    {
        $id = $req->btnxem;
        $date = date('Y-m-d H:i:s');
        Email::where('id',$id)->update(['status'=>'1','updated_at'=>$date]);
        return redirect('admin/email');
    }
}

?>

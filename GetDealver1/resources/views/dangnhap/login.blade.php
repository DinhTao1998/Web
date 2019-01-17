<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>GetDeal Admin - Đăng nhập</title>
<base href="{{asset('')}}">
  <!-- Bootstrap core CSS-->
  <link href="GetDeal/Admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template-->
  <link href="GetDeal/Admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="GetDeal/Admin/css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header1 navbar-brand mr-1">GetDeal</div>
      <div class="card-body">
        @if(session('thongbao'))
        <div class="alert alert-success">
          {{session('thongbao')}}
        </div>
        @endif
        <form name="admin/dangnhap" role="form" method="POST">
          <div class="form-group">
            <div class="form-label-group">
              <input type="hidden" name="_token" value="{{csrf_token()}}">
              <input type="email" id="taikhoan" class="form-control" placeholder="Email address" required="required" autofocus="autofocus">
              <label for="taikhoan">Tài khoản</label>          
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="matkhau" class="form-control" placeholder="Password" required="required">
              <label for="matkhau">Mật khẩu</label>
            </div>
          </div>
          <div class="form-group">
            <div class="checkbox">
              <label>
                <input type="checkbox" value="remember-me">
                Nhớ mật khẩu
              </label>
            </div>
          </div>
          <button type="submit" class="btn btn-primary btn-block">Đăng nhập</button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="register.html">Tạo tài khoản</a>
          <a class="d-block small" href="forgot-password.html">Quên mật khẩu?</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="GetDeal/Admin/vendor/jquery/jquery.min.js"></script>
  <script src="GetDeal/Admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="GetDeal/Admin/vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>

<?php
  session_start();
  require("includes/conn.php");
  if (isset($_POST["btn_submit"])) {
    // lấy thông tin người dùng
  $username = $_POST["username"];
  $password = $_POST["password"];
    //làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
    //mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
  $username = strip_tags($username);
  $username = addslashes($username);
  $password = strip_tags($password);
  $password = addslashes($password);
  if ($username == "" || $password =="") {
    echo "username hoặc password bạn không được để trống!";
  }else{
    $sql = "select * from taikhoan where tenTK = '$username' and matKhau = '$password' ";
    $query = mysqli_query($conn,$sql);
        $num_rows = mysqli_num_rows($query);
        $data = mysqli_fetch_array($query);
    if ($num_rows==0) {
      echo "tên đăng nhập hoặc mật khẩu không đúng !";
    }else{
                $_SESSION['maTK'] = $data["maTK"];
                $_SESSION['tenTK'] = $data["tenTK"];
                $_SESSION["capDo"] = $data["capDo"];
                if($data["capDo"]==1)
                header('Location: .php');
                else if($data["capDo"]==3)
                header('Location: teacher/teacher.php');
                else if($data["capDo"]==2)
                header('Location: manager/index.php');
                else
                header('Location: index.php');
        }
    }
  }

 ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Đăng nhập</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link rel="stylesheet" href="css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="css/aos.css">
  <link href="css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="css/style.css">



</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">

    <?php include('header.php'); ?>

    
    <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
      <div class="container">
        <div class="row align-items-end justify-content-center text-center">
          <div class="col-lg-7">
            <h2 class="mb-0">Đăng nhập</h2>
            <p>Cho chúng tôi biết bạn là ai!</p>
          </div>
        </div>
      </div>
    </div>

    <div class="custom-breadcrumns border-bottom">
      <div class="container">
        <a href="index.html">Trang chủ</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">Đăng nhập</span>
      </div>
    </div>

    <div class="site-section">
        <div class="container">
          <form method="POST" action="login.php">
            <div class="row justify-content-center">
                  <div class="col-md-5">
                      <div class="row">
                          <div class="col-md-12 form-group">
                              <label for="username">Tên tài khoản</label>
                              <input type="text" id="username" name="username" class="form-control form-control-lg">
                          </div>
                          <div class="col-md-12 form-group">
                              <label for="pword">Mật khẩu</label>
                              <input type="password" id="password" name="password" class="form-control form-control-lg">
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-12">
                              <input type="submit" value="Đăng nhập" class="btn btn-primary btn-lg px-5" name="btn_submit">
                          </div>
                      </div>
                  </div>
              </div>
            </form>
        </div>
    </div>
    

  </div>
  <!-- .site-wrap -->
  <!-- loader -->
  <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#51be78"/></svg></div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/jquery.mb.YTPlayer.min.js"></script>
  <script src="js/main.js"></script>

</body>

</html>
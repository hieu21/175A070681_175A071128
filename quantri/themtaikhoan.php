<?php 

    require("../includes/connection.php"); 
?>

<?php
	if (isset($_POST["btn_submit"])) {
		//lấy thông tin từ các form bằng phương thức POST
		$Mataikhoan = $_POST["Mataikhoan"];
        $Tentaikhoan = $_POST["Tentaikhoan"];
        // $Matkhau = $_POST["Matkhau"];
		$Hoten = $_POST["Hoten"];
        $Ngaysinh = $_POST["Ngaysinh"];
        $Diachi = $_POST["Diachi"];
        $Capdo = $_POST["Capdo"];
		//Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
		if ($Mataikhoan == "" || $Tentaikhoan == "" || $Hoten == "" || $Ngaysinh == "" || $Diachi == "" || $Capdo == "") {
			$message = '<label class="text-success">Bạn vui lọng nhập đầy đủ thông tin</label>';
		}else{
            //thực hiện việc lưu trữ dữ liệu vào db
                $sql = "INSERT INTO taikhoan(maTK, tenTK, matKhau, capDo, ngayTao ) VALUES ( '$Mataikhoan', '$Tentaikhoan', '$Ngaysinh', '$Capdo', now())";
                mysqli_query($conn,$sql);
            if($_POST['Capdo'] =="2"){

                $sql1 = "INSERT INTO quanly(maQL, hoTenQL, ngaySinh, diaChi, maTK ) VALUES ( '$Mataikhoan', '$Hoten', '$Ngaysinh', '$Diachi', '$Mataikhoan')";
                mysqli_query($conn,$sql1);
                //echo "bạn đã đăng ký thành công";
                echo '<script language="javascript">';
                echo 'alert("BẠN ĐÃ THÀNH CÔNG")';
                echo '</script>';
                //$message = "<label class='text-success'>bạn đã thành công</label>";

            }
            else if($_POST['Capdo'] =="1"){
                $sql2 = "INSERT INTO giangvien(maGV, hoTenGV, ngaySinh, diaChi, maTK ) VALUES ( '$Mataikhoan', '$Hoten', '$Ngaysinh', '$Diachi', '$Mataikhoan')";
                mysqli_query($conn,$sql2);
               // echo "bạn đã đăng ký thành công";
                echo '<script language="javascript">';
                echo 'alert("BẠN ĐÃ THÀNH CÔNG")';
                echo '</script>';
                //$message = "<label class='text-success'>bạn đã thành công</label>";


            }
		}
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đăng kí giảng viên</title>
    <link rel="stylesheet" href="../style/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style/css/style.css">
</head>
<body>
    <header>
        <div class="wrapper">
            <?php
                include("headerqt.php");
            ?>
        </div>
    </header>
    <nav>
        <div class="wrapper">
            <?php
                include("navqt.php");
            ?>
        </div>
    </nav>
    <main>
        <div class="wrapper">
            <div class="main">
                <h4 style="text-align: center" >Thêm Tài Khoản</h4>
                
                <form action="themtaikhoan.php" method="post" >
                    <div class="form-group">
                        <label>Mã tài khoản</label>
                        <input type="text" class="form-control" id="Mataikhoan" name="Mataikhoan" >
                    </div>
                    <div class="form-group">
                        <label>Tên tài khoản: Mã ngành + NS:năm/tháng/ngày + Tên không dấu VD:N0119990921hieu</label>
                        <input type="text" class="form-control" id="Tentaikhoan" name="Tentaikhoan" >
                    </div>
                    <!-- <div class="form-group">
                        <label>Mật khẩu</label>
                        <input type="text" class="form-control" id="Matkhau" name="Matkhau" >
                    </div> -->
                    <div class="form-group">
                        <label>Ngày sinh (vừa là mật khẩu)</label>
                        <input type="date" class="form-control" id="Ngaysinh" name="Ngaysinh" >
                    </div>
                    <div class="form-group">
                        <label>Họ tên</label>
                        <input type="text" class="form-control" id="Hoten" name="Hoten" >
                    </div>
                    
                    <div class="form-group">
                        <label>Địa chỉ</label>
                        <input type="text" class="form-control" id="Diachi" name="Diachi" >
                    </div>
                    <label>Chức vụ:</label>
                    <select name="Capdo" class="form-control" class="form-group"  >
		                <option></option>
		                <option value="2">Quản lý</option>
		                <option value="1">Giảng viên</option>
		            </select>
                    
                    <input type="submit" class="btn btn-primary" style="margin-top: 25px;" value="Thêm" name="btn_submit" >
                    
                    
                </form>
            </div>
            
        </div>   
    </main>
    <footer>
        <div class="wrapper">
            <?php
                include("footerqt.php");
            ?>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="../style/js/bootstrap.min.js"></script>
</body>
</html>
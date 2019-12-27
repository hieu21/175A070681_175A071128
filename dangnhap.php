
<?php
session_start();
?>
<?php
    require("includes/connection.php");
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
                if($data["capDo"]==3)
                header('Location: quantri/themtaikhoan.php');
                else if($data["capDo"]==1)
                header('Location: giangvien/KehoachgiangdayGV.php');
                else if($data["capDo"]==2)
                header('Location: manager/manager.php');
                else
                header('Location: tintuc.php');
	    	}
			
                // Thực thi hành động sau khi lưu thông tin vào session
                // ở đây mình tiến hành chuyển hướng trang web tới một trang gọi là index.php
			    //header('Location: index.php');
		}
	}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="style/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/css/style.css">
</head>
<body>
    <header>
        <div class="wrapper">
            
            <?php
                include("header.php");
            ?>
        </div>
    </header>
    <nav>
        <div class="wrapper">
            <?php
                include("nav.php");
            ?>
        </div>
    </nav>
    <main>
            <div class="wrapper">
                <div class="login">
                    <form method="POST" action="dangnhap.php">
                        <table>
                            <tr>
                                <td>Username</td>
                                <td><input type="text" name="username" size="30"></td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td><input type="password" name="password" size="30"></td>
                            </tr>
                            <tr>
                              <td colspan="2" align="center"> <input type="submit" name="btn_submit" value="Đăng nhập"></td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
    </main>
    <footer>
        <div class="wrapper">
            <?php
                include("footer.php");
            ?>  
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="style/js/bootstrap.min.js"></script>
</body>
</html>
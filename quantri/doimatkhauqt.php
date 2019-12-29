<?php require_once("../includes/connection.php"); ?>
<?php session_start() ?>
<?php
    $message = '';
	if (isset($_POST["doimatkhauqt"])) {
		//lấy thông tin từ các form bằng phương thức POST
		$MATKHAUCU = $_POST["MATKHAUCU"];
		$MATKHAUMOI = $_POST["MATKHAUMOI"];
		$NLMATKHAUMOI = $_POST["NLMATKHAUMOI"];
		
        // $MATKHAUOLD = md5($MATKHAUCU);
        // $MATKHAUNEW = md5($MATKHAUMOI);
        // $MATKHAURE = md5($NLMATKHAUMOI);
         


		$DOIMATKHAU = mysqli_query($conn, 'SELECT * from taikhoan where maTK = "'.$_SESSION["maTK"].'"');
		
		$DOIMATKHAU1 = mysqli_fetch_array($DOIMATKHAU);
		
		$data_pwd = $DOIMATKHAU1['matKhau'];
		
		if($data_pwd == $MATKHAUCU){
		
		if($MATKHAUMOI == $NLMATKHAUMOI){
	    $update_pwd = mysqli_query($conn, 
	    	'UPDATE taikhoan set matKhau = "'.$MATKHAUMOI.'" where maTK = "'.$_SESSION['maTK'].'"');

			echo "<script>alert('Đổi mật khẩu thành công!'); window.location='quantri.php'</script>";
		}
		else{
			echo "<script>alert('Mật khẩu với và mật khẩu mới nhập lại không trùng nhau! Yêu cầu nhập lại'); window.location='quantri.php'</script>";
		}
	}
	else
	{
		echo "<script>alert('Mật khẩu cũ của bạn sai!'); window.location='quantri.php'</script>";
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
		<ul class="nav nav-tabs ">
                <li class="nav-item">
                    <a class="nav-link" href="themtaikhoan.php">Thêm tài khoản</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="TTQL.php">Thông tin tài khoản QL</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="TTGV.php">Thông tin tài khoản GV</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Tài khoản</a>
                    <div class="dropdown-menu">
                    <a class="dropdown-item" href="#"><?php echo $_SESSION['tenTK']; ?></a>
                    <a class="dropdown-item" href="doimatkhauqt.php">Đổi mật khẩu</a>
                    <a class="dropdown-item" href="../dangxuat.php">Đăng xuất</a>
                    </div>
                </li>
                
            </ul>
        </div>
    </nav>
    <main>
            <div class="wrapper">
                <div class="login">
				<form action="doimatkhauqt.php" method="POST">	
					<div class="form-group">
						<label>Mật khẩu cũ</label>
						<input type="password" name="MATKHAUCU" class="form-control" required />
					</div>
					<div class="form-group">
						<label>Mật khẩu mới</label>
						<input type="password" name="MATKHAUMOI" class="form-control" required/>
					</div>
					<div class="form-group">
						<label>Nhập lại mật khẩu mới</label>
						<input type="password" name="NLMATKHAUMOI" class="form-control" required/>
					</div>
					<div class="form-group" >
							<input type="submit" name="doimatkhauqt"  value="Đổi mật khẩu" class="btn btn-success" style="margin-top: 25px; margin-left: 0px;"/>
					</div>
					<?php echo $message; ?>                   
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
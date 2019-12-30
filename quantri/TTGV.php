<?php require("../includes/connection.php");?>

<?php
	$sql = "SELECT taikhoan.maTK, taikhoan.tenTK, taikhoan.matKhau, giangvien.hoTenGV, giangvien.maGV, giangvien.ngaySinh, giangvien.diaChi 
    FROM taikhoan ,giangvien
    where taikhoan.maTK = giangvien.maTK" ;

	$query = mysqli_query($conn,$sql);
    
	
	
?>

<?php
	if (isset($_GET["id_delete"])) {
        $sql = 'DELETE FROM giangvien WHERE maTK ="' .$_GET["id_delete"].'"';
		mysqli_query($conn,$sql);
		$sql = 'DELETE FROM taikhoan WHERE maTK ="' .$_GET["id_delete"].'"';
		mysqli_query($conn,$sql);
		
		
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
            
            <div class="main-right">
                <h5>Danh sách giảng viên</h5>
                <div>
                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                            <th scope="col">Mã TK</th>
                            <th scope="col">Tên giảng viên</th>
                            <th scope="col">Tài khoản</th>
                            <th scope="col">Ngày sinh</th>
                            <th scope="col">Địa chỉ</th>
                            <th scope="col">Sửa</th>
                            <th scope="col">Xóa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                while ( $data = mysqli_fetch_array($query)) {
                                
                                    $maTK = $data['maTK'];
                            ?>
                            <tr>
                            <td scope="row"><?php echo $data['maTK']; ?></td>
                            <td><?php echo $data['hoTenGV']; ?></td>
                            <td><?php echo $data['tenTK']; ?></td>
                            
                            <td><?php echo $data['ngaySinh']; ?></td>
                            <td><?php echo $data['diaChi']; ?></td>
                            <td><a href="suaTTGV.php?id=<?php echo $maTK;?>">Sửa</a></td>
                            <td><a href="TTGV.php?id_delete=<?php echo $maTK;?>">Xóa</a></td>

                            </tr>
                            <?php } ?>
                        </tbody>
			        </table>
                    </div>
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
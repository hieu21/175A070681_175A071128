<?php require("../includes/connection.php");?>

<?php
	$sql = "SELECT taikhoan.maTK, taikhoan.tenTK, taikhoan.matKhau, quanly.hoTenQL, quanly.maQL, quanly.ngaySinh, quanly.diaChi
    FROM taikhoan ,quanly
    where taikhoan.maTK = quanly.maTK" ;

	$query = mysqli_query($conn,$sql);
    
	
	
?>

<?php
	if (isset($_GET["id_delete"])) {
        $sql = 'DELETE FROM quanly WHERE maTK ="' .$_GET["id_delete"].'"';
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
    <title>Đăng kí quản lý</title>
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
                    <h5>Danh sách quản lý</h5>
                    <div>
                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                            <th scope="col">Mã TK</th>
                            <th scope="col">Tên quản lý</th>
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
                                
                                    $ID = $data['maTK'];
                            ?>
                            <tr>
                            <td scope="row"><?php echo $data['maTK']; ?></td>
                            <td><?php echo $data['hoTenQL']; ?></td>
                            <td><?php echo $data['tenTK']; ?></td>
                            
                            <td><?php echo $data['ngaySinh']; ?></td>
                            <td><?php echo $data['diaChi']; ?></td>
                            
                            <td><a href="suaTTQL.php?id=<?php echo $maTK;?>">Sửa</a></td>
                            <td><a href="TTQL.php?id_delete=<?php echo $ID;?>">Xóa</a></td>

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
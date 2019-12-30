<?php require("../includes/connection.php");?>

<?php
	if (isset($_POST["btn_edit"])) {//name chỗ nút cập nhâtj
        //lấy thông tin từ các form bằng phương thức POST
        $Maquanly = $_POST['Maquanly'];
		$Hoten = $_POST["Hoten"];
		$Ngaysinh = $_POST["Ngaysinh"];
		$Diachi = $_POST["Diachi"];
		
	
		// Viết câu lệnh cập nhật thông tin người dùng
        $sql = 'UPDATE giangvien SET hoTenQL = "'.$Hoten.'", ngaySinh = "'.$Ngaysinh.'", diaChi = "'.$Diachi.'" WHERE maGV = "'.$Maquanly.'"';
       
		// thực thi câu $sql với biến conn lấy từ file connection.php
		mysqli_query($conn,$sql);
        
		header('Location: TTQL.php');
       
	}
 
    $id = -1;
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
	}


	$sql = "SELECT * FROM quanly WHERE maQL = '$id'";
	$query = mysqli_query($conn,$sql);
      
 
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thông tin giảng viên</title>
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
                    <?php
		              while ( $data = mysqli_fetch_array($query) ) {	
	                ?>                
                <form action="suaTTGV.php" method="post" >
                    <div class="form-group">
                        <label>Mã quản lý</label>
                        <input type="text" class="form-control" id="Maquanly" name="Maquanly" value="<?php echo $data['maQL']; ?>" readonly >
                    </div>
                    
                    <div class="form-group">
                        <label>Họ tên</label>
                        <input type="text" class="form-control" id="Hoten" name="Hoten"  value="<?php echo $data['hoTenQL']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Ngày sinh </label>
                        <input type="date" class="form-control" id="Ngaysinh" name="Ngaysinh"  value="<?php echo $data['ngaySinh']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Địa chỉ</label>
                        <input type="text" class="form-control" id="Diachi" name="Diachi"  value="<?php echo $data['diaChi']; ?>">
                    </div>
                    
                    
                    <input type="submit" class="btn btn-primary" style="margin-top: 25px;" value="Sửa" name="btn_edit" >  
                </form>
                <?php } ?>
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
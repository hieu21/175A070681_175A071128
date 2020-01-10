
<?php require("includes/connection.php");?>
<?php
error_reporting(0);
ini_set('display_errors', 0);
?>
<?php
    if (isset($_POST["btn_submit"])){
        $nhapthongtin = $_POST["nhapthongtin"];
        $sql = "SELECT * FROM lichtrinhthuchien, giangvien, mon, giangvien_mon, lop_monhoc, lop_hocphan, lmh_lhp, thoigianhoc WHERE lichtrinhthuchien.maGV = giangvien.maGV AND giangvien_mon.maGV = giangvien.maGV AND giangvien_mon.maMon = mon.maMon AND giangvien.hoTenGV = '$nhapthongtin' AND lop_monhoc.maMon = mon.maMon AND lmh_lhp.maLMH = lop_monhoc.maLMH AND lmh_lhp.maLHP = lop_hocphan.maLHP AND lop_hocphan.maTGH = thoigianhoc.maTGH ";
        $query = mysqli_query($conn,$sql);        
        
        
    }
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lịch trình giảng dạy</title>
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
    <div class="wrapper" style="display: block">
            <div class="main">
            <form action="Lichtrinhgiangday.php" method="post" >
            
            <div class="form-group">
                <label for="exampleInputPassword1">Thông tin giảng viên</label>
                <input type="text" class="form-control" id="nhapthongtin" name="nhapthongtin">
            </div>
            
            <input type="submit" class="btn btn-primary" value="Xem" name="btn_submit" >
            </form>
            </div >
                <div style="padding-bottom: 15px;">
                <table class="table">
                        <thead class="thead-light">
                            <tr>
                            <th scope="col">Tên giảng viên</th>
                            <th scope="col">Bài học </th>
                            <th scope="col">Địa điểm</th>
                            <th scope="col">Thòi gian </th>
                            <th scope="col">Môn</th>
                            <th scope="col">Lớp môn học</th>
                            <th scope="col">Lớp học phần </th>
                            <th scope="col">Giai đoạn</th>
                            <th scope="col">Học kỳ</th>
                            <th scope="col">Năm học</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                                while ( $data = mysqli_fetch_array($query)) {
                                
                                   
                            ?>
                            <tr>
                            <td scope="row"><?php echo $data['hoTenGV']; ?></td>
                            <td scope="row"><?php echo $data['baiHocTH']; ?></td>
                            <td scope="row"><?php echo $data['diaDiemTH']; ?></td>
                            <td scope="row"><?php echo $data['thoiGianTH']; ?></td>
                            <td scope="row"><?php echo $data['tenMon']; ?></td>
                            <td scope="row"><?php echo $data['maLMH']; ?></td>                            
                            <td scope="row"><?php echo $data['maLHP']; ?></td>
                            <td scope="row"><?php echo $data['giaiDoan']; ?></td>
                            <td scope="row"><?php echo $data['hocKy']; ?></td>
                            <td scope="row"><?php echo $data['namHoc']; ?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
			        </table>
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

<?php require("../includes/connection.php");?>

<?php
    session_start();
?>
<?php
    
    $maGV = $_SESSION['maTK'];
	$sql = 'SELECT *
    FROM kehoachgiangday, giangvien_mon, mon, lop_monhoc, lmh_lhp, lop_hocphan, thoigianhoc
    where kehoachgiangday.maGV = giangvien_mon.maGV AND giangvien_mon.maMon = mon.maMon AND mon.maMon = lop_monhoc.maMon AND lop_monhoc.maLMH = lmh_lhp.maLMH AND lop_hocphan.maLHP = lmh_lhp.maLHP AND lop_hocphan.maTGH = thoigianhoc.maTGH AND kehoachgiangday.maGV = "'.$maGV.'"'  ;

	$query = mysqli_query($conn,$sql);
    
//	
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kế hoạch giảng dạy GV</title>
    <link rel="stylesheet" href="../style/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style/css/style.css">
</head>
<body>
    <header>
        <div class="wrapper">
            <?php
                include("headergv.php");
            ?>
            
            
        </div>
    </header>
    <nav>
        <div class="wrapper">
            <?php
                include("navGV.php");
            ?>
        </div>
    </nav>
    <main>
    <div class="wrapper">               
                <div class="main-right">
                    <h5>Kế hoạch giảng dạy</h5>
                    <div>
                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                            <th scope="col">Mã giảng dạy</th>
                            <th scope="col">Bài học dự kiến</th>
                            <th scope="col">Địa điểm dự kiến</th>
                            <th scope="col">Thời gian dự kiến</th>
                            <th scope="col">Lớp môn học</th>
                            <th scope="col">Lớp học phần</th>
                            <th scope="col">Giai đoạn</th>
                            <th scope="col">Học kỳ</th>
                            <th scope="col">Năm học</th>
                            
                            
                            
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                while ( $data = mysqli_fetch_array($query)) {
                                
                                    $maKHGD = $data['maKHGD'];
                            ?>
                            <tr>
                            <td scope="row"><?php echo $data['maKHGD']; ?></td>
                            <td><?php echo $data['baiHocDK']; ?></td>
                            <td><?php echo $data['diaDiemDK']; ?></td>                          
                            <td><?php echo $data['thoiGianDK']; ?></td>
                            <td><?php echo $data['maLMH']; ?></td>
                            <td><?php echo $data['maLHP']; ?></td>
                            <td><?php echo $data['giaiDoan']; ?></td>
                            <td><?php echo $data['hocKy']; ?></td>
                            <td><?php echo $data['namHoc']; ?></td>
      
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
            <div id="address">
                <div class="name">
                    TRƯỜNG ĐẠI HỌC THỦY LỢI 
                </div>
                Địa chỉ : 175 TÂY SƠN, ĐỐNG ĐA, HÀ NỘI. <br>
                Điện thoại: (024) 3852 2201 - Fax: (024) 3563 3351
                Email: <a href="#">phonghcth@tlu.edu.vn</a>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="../style/js/bootstrap.min.js"></script>
</body>
</html>

<?php require("../includes/connection.php");?>

<?php
    session_start();
?>
<?php
    $maGV = $_SESSION['maTK'];
	$sql = "SELECT maLTTH, baiHocTH, diaDiemTH ,thoiGianTH
    FROM lichtrinhthuchien
    where maGV = '$maGV'" ;

	$query = mysqli_query($conn,$sql);
    
//	
	
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lịch trình giảng dạy GV</title>
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
                    <h5>Lịch trình giảng dạy</h5>
                    <div>
                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                            <th scope="col">Mã giảng dạy</th>
                            <th scope="col">Bài học thực hiện</th>
                            <th scope="col">Địa điểm thực hiện</th>
                            <th scope="col">Thời gian thực hiện</th>
                            
                            
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                while ( $data = mysqli_fetch_array($query)) {
                                
                                    $maLTTH = $data['maLTTH'];
                            ?>
                            <tr>
                            <td scope="row"><?php echo $data['maLTTH']; ?></td>
                            <td><?php echo $data['baiHocTH']; ?></td>
                            <td><?php echo $data['diaDiemTH']; ?></td>                          
                            <td><?php echo $data['thoiGianTH']; ?></td>
      
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
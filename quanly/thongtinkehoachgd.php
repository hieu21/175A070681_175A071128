<?php require("../includes/connection.php");?>
<?php
	$sql = "SELECT * 
    FROM kehoachgiangday";
    

	$query = mysqli_query($conn,$sql);
    
	
	
?>

<?php
	if (isset($_GET["id_delete"])) {
        $sql = 'DELETE FROM kehoachgiangday WHERE maKHGD ="' .$_GET["id_delete"].'"';
		mysqli_query($conn,$sql);
		// $sql = 'DELETE FROM taikhoan WHERE maTK ="' .$_GET["id_delete"].'"';
		// mysqli_query($conn,$sql);
		
		
	}
	
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thông tin kế hoạch giảng dạy</title>
    <link rel="stylesheet" href="../style/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style/css/style.css">
</head>
<body>
    <header>
        <div class="wrapper">
            
            <?php
                include("headerql.php");
            ?>
            
        </div>
    </header>
    <nav>
        <div class="wrapper">
            <?php
                include("navql.php");
            ?>
        </div>
    </nav>
    <main>
        <div class="wrapper">
        <div class="main-right" style="padding: 10px">
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                        <th scope="col">Mã kế hoạch giảng dạy</th>                       
                        <th scope="col">Bài học dự kiến</th>
                        <th scope="col">Địa điểm dự kiến</th>                       
                        <th scope="col">Thời gian dự kiến</th>
                        <th scope="col">Mã giảng viên</th>                       
                        
                        <th scope="col">Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                            <?php 
                                while ( $data = mysqli_fetch_array($query)) {
                                
                                    $maKHGD = $data['maKHGD'];
                            ?>
                            <tr>
                            <td scope="row"><?php echo $data['maKHGD']; ?></td>
                            <td scope="row"><?php echo $data['baiHocDK']; ?></td>
                            <td scope="row"><?php echo $data['diaDiemDK']; ?></td>
                            <td scope="row"><?php echo $data['thoiGianDK']; ?></td>
                            <td scope="row"><?php echo $data['maGV']; ?></td>
                            
                            
                            <td><a href="thongtinlophocphan.php?id_delete=<?php echo $maKHGD;?>">Xóa</a></td>

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
                include("footerql.php");
            ?>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="../style/js/bootstrap.min.js"></script>
</body>
</html>
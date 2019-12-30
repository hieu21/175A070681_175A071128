<?php require("../includes/connection.php");?>

<?php
	$sql = "SELECT * 
    FROM thoigianhoc";
    

	$query = mysqli_query($conn,$sql);
    
	
	
?>

<?php
	if (isset($_GET["id_delete"])) {
        $sql = 'DELETE FROM thoigianhoc WHERE maTGH ="' .$_GET["id_delete"].'"';
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
    <title>Thông tin thời gian</title>
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
                        <th scope="col">Mã thời gian</th>
                        <th scope="col">Năm học</th>
                        <th scope="col">Học kỳ</th> 
                        <th scope="col">Giai Đoạn</th>                        
                        
                        <th scope="col">Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                            <?php 
                                while ( $data = mysqli_fetch_array($query)) {
                                
                                    $maTGH = $data['maTGH'];
                            ?>
                            <tr>
                            <td scope="row"><?php echo $data['maTGH']; ?></td>
                            <td scope="row"><?php echo $data['namHoc']; ?></td>
                            <td scope="row"><?php echo $data['hocKy']; ?></td>
                            <td scope="row"><?php echo $data['giaiDoan']; ?></td>
                            
                            <td><a href="thongtinthoigian.php?id_delete=<?php echo $maTGH;?>">Xóa</a></td>

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
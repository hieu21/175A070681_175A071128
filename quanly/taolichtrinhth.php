<?php require("../includes/connection.php");?>
<<?php
    if (isset($_POST["btn_submit"])){
        $maltth = $_POST["maltth"];
        $baihocth = $_POST["baihocth"];
        $diadiemth = $_POST["diadiemth"];
        $thoigianth = $_POST["thoigianth"];
        $magv = $_POST["magv"];
        

        $sql = "INSERT INTO lichtrinhthuchien(maLTTH, baiHocTH, diaDiemTH, thoiGianTH, maGV ) VALUES ( '$maltth', '$baihocth' , '$diadiemth' , '$thoigianth' , '$magv')";
        // mysqli_query($conn,$sql);

        if(mysqli_query($conn,$sql)){
            echo '<script language="javascript">';
            echo 'alert("THÊM THÀNH CÔNG")';
            echo '</script>';
        }else{
            echo '<script language="javascript">';
            echo 'alert("THÊM KHÔNG THÀNH CÔNG")';
            echo '</script>';
        }
            





    }
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tạo lịch trình thực hiện</title>
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
        <div class="main" style="width: 400px">
                <h4 style="text-align: center" >Thêm lịch trình giảng dạy</h4>
                
                <form action="taolichtrinhth.php" method="post" >
                <div class="form-group">
                        <label>Mã lịch trình thực hiện</label>
                        <input type="text" class="form-control" id="maltth" name="maltth" >
                    </div>
                    <div class="form-group">
                        <label>Bài học thực hiện</label>
                        <input type="text" class="form-control" id="baihocth" name="baihocth" >
                    </div>
                    <div class="form-group">
                        <label>Địa điểm thực hiện</label>
                        <input type="text" class="form-control" id="diadiemth" name="diadiemth" >
                    </div>
                    <div class="form-group">
                        <label>Thời gian thực hiện</label>
                        <input type="date" class="form-control" id="thoigianth" name="thoigianth" >
                    </div>
                    <div class="form-group">
                        <label>Mã giảng viên</label>
                        <input type="text" class="form-control" id="magv" name="magv" >
                    </div>
                    
                    
                    
                    <input type="submit" class="btn btn-primary" style="margin-top: 25px;" value="Thêm" name="btn_submit" >
                    
                    
                </form>
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
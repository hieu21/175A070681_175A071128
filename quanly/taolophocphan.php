<?php require("../includes/connection.php");?>
<?php
    if (isset($_POST["btn_submit"])){
        $malophocphan = $_POST["malophocphan"];
        $mathoigianhoc = $_POST["mathoigianhoc"];

        $sql = "INSERT INTO lop_hocphan(maLHP, maTGH ) VALUES ( '$malophocphan', '$mathoigianhoc')";
        // mysqli_query($conn,$sql);

        if(mysqli_query($conn,$sql)){
            echo '<script language="javascript">';
            echo 'alert("THÊM LỚP THÀNH CÔNG")';
            echo '</script>';
        }else{
            echo '<script language="javascript">';
            echo 'alert("THÊM LỚP KHÔNG THÀNH CÔNG")';
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
    <title>Tạo lớp học phần</title>
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
                <h4 style="text-align: center" >Thêm lớp học phần</h4>
                
                <form action="taolophocphan.php" method="post" >
                    <div class="form-group">
                        <label>Mã lớp học phần</label>
                        <input type="text" class="form-control" id="malophocphan" name="malophocphan" >
                    </div>
                    <div class="form-group">
                        <label>Mã thời gian học</label>
                        <input type="text" class="form-control" id="mathoigianhoc" name="mathoigianhoc" >
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
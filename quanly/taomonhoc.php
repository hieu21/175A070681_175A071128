<?php require("../includes/connection.php");?>
<?php
    if (isset($_POST["btn_submit"])){
        $mamonhoc = $_POST["mamonhoc"];
        $tenmonhoc = $_POST["tenmonhoc"];
        $manganh = $_POST["manganh"];

        $sql = "INSERT INTO mon(maMon, tenMon, maNganh ) VALUES ( '$mamonhoc', '$tenmonhoc', '$manganh' )";
        // mysqli_query($conn,$sql);

        if(mysqli_query($conn,$sql)){
            echo '<script language="javascript">';
            echo 'alert("THÊM MÔN THÀNH CÔNG")';
            echo '</script>';
        }else{
            echo '<script language="javascript">';
            echo 'alert("THÊM MÔN KHÔNG THÀNH CÔNG")';
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
    <title>Tạo môn học</title>
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
                <h4 style="text-align: center" >Thêm môn học</h4>
                
                <form action="taomonhoc.php" method="post" >
                    <div class="form-group">
                        <label>Mã môn học</label>
                        <input type="text" class="form-control" id="mamonhoc" name="mamonhoc" >
                    </div>
                    <div class="form-group">
                        <label>Tên môn học</label>
                        <input type="text" class="form-control" id="tenmonhoc" name="tenmonhoc" >
                    </div>
                    <div class="form-group">
                        <label>Mã ngành</label>
                        <input type="text" class="form-control" id="manganh" name="manganh" >
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
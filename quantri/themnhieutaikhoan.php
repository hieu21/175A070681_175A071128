<?php
require("../includes/connection.php"); 
require_once('vendor/php-excel-reader/excel_reader2.php');
require_once('vendor/SpreadsheetReader.php');

error_reporting(0);
ini_set('display_errors', 0);

if (isset($_POST["import"]))
{
    
    
  $allowedFileType = ['application/vnd.ms-excel','text/xls','text/xlsx','application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'];
  
  if(in_array($_FILES["file"]["type"],$allowedFileType)){

        $targetPath = 'uploads/'.$_FILES['file']['name'];
        move_uploaded_file($_FILES['file']['tmp_name'], $targetPath);
        
        $Reader = new SpreadsheetReader($targetPath);
        
        $sheetCount = count($Reader->sheets());
        for($i=0;$i<$sheetCount;$i++)
        {
            
            $Reader->ChangeSheet($i);
            
            foreach ($Reader as $Row)
            {
          
                $matk = "";
                if(isset($Row[0])) {
                    $matk = mysqli_real_escape_string($conn,$Row[0]);
                }
                
                $tentk = "";
                if(isset($Row[1])) {
                    $tentk = mysqli_real_escape_string($conn,$Row[1]);
                }
                $capdo = "";
                if(isset($Row[2])) {
                    $capdo = mysqli_real_escape_string($conn,$Row[2]);
                }
                
                $hoten = "";
                if(isset($Row[3])) {
                    $hoten = mysqli_real_escape_string($conn,$Row[3]);
                }
                $ngaysinh = "";
                if(isset($Row[4])) {
                    $ngaysinh = mysqli_real_escape_string($conn,$Row[4]);
                }
                
                $diachi = "";
                if(isset($Row[5])) {
                    $diachi = mysqli_real_escape_string($conn,$Row[5]);
                }
                
                if (!empty($matk) || !empty($tentk) || !empty($capdo) || !empty($hoten) || !empty($ngaysinh) || !empty($diachi) ) {
                    $query = "INSERT INTO taikhoan(maTK, tenTK, matKhau, capDo, ngayTao) values('$matk', '$tentk', '$ngaysinh', '$capdo', now())";
                    mysqli_query($conn, $query);
                    if ($capdo = 1){
                        $sql2 = "INSERT INTO giangvien(maGV, hoTenGV, ngaySinh, diaChi, maTK ) VALUES ( '$matk', '$hoten', '$ngaysinh', '$diachi', '$matk')";
                        mysqli_query($conn,$sql2);
                        
                    }
                    else if($capdo = 2){
                        $sql1 = "INSERT INTO quanly(maQL, hoTenQL, ngaySinh, diaChi, maTK ) VALUES ( '$matk', '$hoten', '$ngaysinh', '$diachi', '$matk')";
                        mysqli_query($conn,$sql1);
                        
                    }
                        
            
                   
                }
             }
        
         }
  }
  
}
?>


<!DOCTYPE html>
<html>    
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thêm tài khoản</title>
    <link rel="stylesheet" href="../style/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style/css/style.css">
<style>    

</style>
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
            <h4>Import Excel File </h4>
                <form action="" method="post"
                    name="frmExcelImport" id="frmExcelImport" enctype="multipart/form-data">
                    <div>
                        <label>Choose Excel
                            File</label> <input type="file" name="file"
                            id="file" accept=".xls,.xlsx">
                        <button type="submit" id="submit" name="import"
                            class="btn-submit">Import</button>
                
                    </div>
                
                </form>
                
            
            
            
               
        <?php
            $sqlSelect = "SELECT * FROM taikhoan";
            $result = mysqli_query($conn, $sqlSelect);

        if (mysqli_num_rows($result) > 0)
        {
        ?>
                
            <table class='table'>
                <thead class="thead-light">
                    <tr>
                        <th scope="col">Mã tài khoản</th>
                        <th scope="col">Tên tài khoản</th>
                        
                        <th scope="col">Cấp Độ</th>
                        <th scope="col">Ngày tạo</th>
                        

                    </tr>
                </thead>
        <?php
            while ($row = mysqli_fetch_array($result)) {
        ?>                  
                <tbody>
                <tr>
                    <td><?php  echo $row['maTK']; ?></td>
                    <td><?php  echo $row['tenTK']; ?></td>
                    
                    <td><?php  echo $row['capDo']; ?></td>
                    <td><?php  echo $row['ngayTao']; ?></td>
                </tr>
        <?php
            }
        ?>
                </tbody>
            </table>
        <?php 
        } 
        ?>
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
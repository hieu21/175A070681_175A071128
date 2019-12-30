<?php require("../includes/connection.php");?>
<?php
	$sql = "SELECT * 
    FROM nganh";
    

	$query = mysqli_query($conn,$sql);
    
	
	
?>

<?php
	if (isset($_GET["id_delete"])) {
        $sql = 'DELETE FROM nganh WHERE maNganh ="' .$_GET["id_delete"].'"';
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
    <title>Thông tin ngành học</title>
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
                        <th scope="col">Mã ngành</th>
                        <th scope="col">Tên ngành</th>                       
                        
                        <th scope="col">Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                            <?php 
                                while ( $data = mysqli_fetch_array($query)) {
                                
                                    $maNganh = $data['maNganh'];
                            ?>
                            <tr>
                            <td scope="row"><?php echo $data['maNganh']; ?></td>
                            <td scope="row"><?php echo $data['tenNganh']; ?></td>
                            
                            <td><a href="thongtinnganhhoc.php?id_delete=<?php echo $maNganh;?>">Xóa</a></td>

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
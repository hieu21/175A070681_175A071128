<?php
session_start();

if(isset($_SESSION['tenTK']) && $_SESSION['tenTK'] != NULL){

   //kiểm tra nếu có session tên us thì xóa nó đi
    unset($_SESSION['tenTK']);
    header('Location: tintuc.php');
}

?>
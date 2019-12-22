<?php
/**
 * 設計`api.php`，能將form表單的資料包含圖片路徑(記得存入空間)一起轉成SESSION或COOKIE接著導向到preview.php。
 * 導向連結可用`header('location:preview.php');`
 */
session_start();
 if(($_POST)){
     $_SESSION=$_POST;
     copy($_FILES['photo']['tmp_name'],"upload/".$_FILES['photo']['name']);
     setcookie("fileName",$_FILES['photo']['name']);
     header('location:preview.php');
 }
 else header('location:index.php');

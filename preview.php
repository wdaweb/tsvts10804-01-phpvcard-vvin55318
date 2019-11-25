<?php
/**
 * 設計`preview.php`，主要是能自動依版型(link到layout.css)跟session資訊(或cookie) 整合到HTML，成為完整的vCard畫面。
 * 另外提供返回按鈕，設計為`<button onclick="window.history.go(-1)">回頁面</button>`
 */
// if(empty($_SESSION)) header('location:index.php');
session_start();
?>



<!DOCTYPE html>
<html lang="zh">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VCard</title>
    <link rel="stylesheet" href="<?=$_SESSION['template']?>.css">
    <style>
        body{
            width:100%;
            height:100%;
        }
        #content{
            width:30%;
            height:55%;
            margin:100px auto;
            background:#c1c1c1;
            text-align:center;
        }
        #content form{       
            padding:20px;
        }

    </style>
</head>

<body>
    <div id="content">
        <form>
            <img src="upload/<?=$_COOKIE['fileName']?>" width="200px"><br>
            <span>姓名:</span><br>
            <input type="text" name="name" vale="name" size="15" value="<?=$_SESSION['name']?>"><br><br>
            <span>職稱:</span><br>
            <input type="text" name="job" size="15" value="<?=$_SESSION['job']?>"><br><br>
            <span>電話:</span><br>
            <input type="tel" name="tel" value="<?=$_SESSION['tel']?>"><br><br>
            <span>電子信箱:</span><br>
            <input type="email" name="email" value="<?=$_SESSION['email']?>"><br><br>
            <span>技能簡介:</span><br>
            <textarea name="info" id="info" cols="23" rows="5"><?=$_SESSION['info']?></textarea><br><br>
            <span>選擇樣式:</span><br>
            <span><?=$_SESSION['template']?></span>
        </form>
    </div>



</body>

</html>
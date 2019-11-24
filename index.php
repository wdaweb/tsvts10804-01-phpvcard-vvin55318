<?php

/**
 * 設計`index.php`畫面為表單網頁，表單欄位可輸入
 *	- 姓名
 *	- 職稱
 *	- 聯絡電話
 *	- 電子信箱
 *	- 技能簡介
 *	- 人像照片
 *	- 下拉選單選擇版型
 *	- 按鈕有[預覽]，能提交form資料到api.php
 */
?>


<!DOCTYPE html>
<html lang="zh">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VCard</title>
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
        <form action="api.php" method="post" enctype="multipart/form-data">
            <span>姓名:</span><br>
            <input type="text" name="name" vale="name" size="15"><br><br>
            <span>職稱:</span><br>
            <input type="text" name="job" size="15"><br><br>
            <span>電話:</span><br>
            <input type="tel" name="tel"><br><br>
            <span>電子信箱:</span><br>
            <input type="email" name="email"><br><br>
            <span>技能簡介:</span><br>
            <textarea name="info" id="info" cols="23" rows="5"></textarea><br><br>
            <span>人像照片:</span>
            <input type="file" name="photo"><br><br>
            <span>選擇樣式:</span>
            <select name="template" id="template">
                <option value="empty">---請選擇---</option>
                <option value="green">綠</option>
                <option value="yellow">黃</option>
                <option value="red">紅</option>
            </select><br><br>
            <span>
                <input type="submit" value="預覽">
                <input type="reset" value="重置">
            </span>
        </form>
    </div>


</body>

</html>
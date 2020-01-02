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
        <h2>vcard</h2>
        <form action="api.php" method="post" enctype="multipart/form-data">
            <span>姓名:</span><br>
            <p><input type="text" name="name" vale="name" size="15"></p>
            <span>職稱:</span><br>
            <p><input type="text" name="job" size="15"></p>
            <span>電話:</span><br>
            <p><input type="tel" name="tel"></p>
            <span>電子信箱:</span><br>
            <p><input type="email" name="email"></p>
            <span>技能簡介:</span><br>
            <p><textarea name="info" id="info" cols="23" rows="5"></textarea></p>
            <span>人像照片:</span>
            <p> <input type="file" name="photo"></p>
            <span>選擇樣式:</span>
            <p><select name="template" id="template">
                <option value="empty">---請選擇---</option>
                <option value="green">green</option>
                <option value="yellow">yellow</option>
                <option value="red">red</option>
                <option value="palegoldenrod">palegoldenrod</option>
                <option value="palegreen">palegreen</option>
                <option value="pink">pink</option>
                <option value="purple">purple</option>
                <option value="wheat">wheat</option>
                <option value="gold">gold</option>
                <option value="tomato">tomato</option>
                <option value="lightskyblue">lightskyblue</option>
            </select></p>
            <span>
                <input type="submit" value="預覽">
                <input type="reset" value="重置">
            </span>
        </form>
    </div>


</body>

</html>
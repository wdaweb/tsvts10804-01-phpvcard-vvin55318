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
    <link rel="stylesheet" href="basic.css">
    <link rel="stylesheet" href="<?=$_SESSION['template']?>.css">
    <style>

    </style>
</head>

<body>
    <div id="content">
        <form>
            <table id="tab1">
                <tr>
                    <td rowspan="7"><img src="upload/<?=$_COOKIE['fileName']?>" width="200px" id="photo"></td>
                    <td>姓　　名：</td>
                    <td><?=$_SESSION['name']?></td>
                </tr>
                <tr>
                    <td>職　　稱：</td>
                    <td><?=$_SESSION['job']?></td>
                </tr>
                <tr>
                    <td>電　　話：</td>
                    <td><?=$_SESSION['tel']?></td>
                </tr>
                <tr>
                    <td>電子信箱：</td>
                    <td><?=$_SESSION['email']?></td>
                </tr>
                <tr>
                    <td>技能簡介：</td>
                    <td><?=$_SESSION['info']?></td>
                </tr>
            </table>
        </form>
        <table width="100%" cellpadding="5px">
            <tr>
                <td id="back"><a href="index.php"><-</a></td>

                <td id="tpl">樣式：<?=$_SESSION['template']?></td>
            </tr>
        </table>

    </div>



</body>

</html>
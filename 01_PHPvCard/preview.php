<?php
/**
 * 設計`preview.php`，主要是能自動依版型(link到layout.css)跟session資訊(或cookie) 整合到HTML，成為完整的vCard畫面。
 * 另外提供返回按鈕，設計為`<button onclick="window.history.go(-1)">回頁面</button>`
 */
// if(empty($_SESSION)) header('location:index.php');
session_start();

switch ($_SESSION['template']) {
    case 'empty':
       $color="#c1c1c1";
    break;
    case 'red':
        $color="red";
    break;
    case 'yellow':
        $color="yellow";
    break;
    case 'green':
        $color="green";
    break;
    case 'palegoldenrod':
        $color="palegoldenrod";
    break;
    case 'palegreen':
        $color="palegreen";
    break;
    case 'pink':
        $color="pink";
    break;
    case 'purple':
        $color="purple";
    break;
    case 'wheat':
        $color="wheat";
    break;
    case 'gold':
        $color="gold";
    break;
    case 'tomato':
        $color="tomato";
    break;
    case 'lightskyblue':
        $color="lightskyblue";
    break;    
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="basic.css"> -->
    <style>
        body{
            width:100vw;
            height:100vh;
            background:#fff;
        }
        #content{
            width:40%;
            height:55%;
            background:<?=$color?>;
            margin:100px auto;
            position:relative;
        }
        #tab1{
            margin:auto;
        }
        #tb2{
            position:absolute;
            bottom:5px;
        }
        #back{
            text-align:left;
        }

        #back a{
            font-size:25px;
            text-decoration:none;
            color:rgb(96,0,0);
        }

        #back a:hover{
            font-size:30px;
            color:rgba(96,0,0,0.8);
        }

        #tpl{
            text-align:right;
            font-size:12px;
        }
        #content form{       
            padding:20px;
        }

        #photo{
            padding:20px;
        }
    </style>
</head>
<body>
    <div id="content">
        <table width="90%" id="tab1">
            <tr >
                <td rowspan="5" width="50%"><img src="upload/<?=$_COOKIE['fileName']?>"  height="300px" id="photo"></td>
                <td height="1">姓　　名：</td>
                <td><?=$_SESSION['name']?></td>
            </tr>
            <tr>
                <td height="1">職　　稱：</td>
                <td><?=$_SESSION['job']?></td>
            </tr>
            <tr>
                <td height="1">電　　話：</td>
                <td><?=$_SESSION['tel']?></td>
            </tr>
            <tr>
                <td height="1">電子信箱：</td>
                <td><?=$_SESSION['email']?></td>
            </tr>
            <tr>
                <td height="1">技能簡介：</td>
                <td><?=$_SESSION['info']?></td>
            </tr>
        </table>
        <table width="100%" cellpadding="5px" id="tb2">
            <tr>
                <td id="back"><a href="index.php"><-</a></td>

                <td id="tpl">樣式：<?=$_SESSION['template']?></td>
            </tr>
        </table>
    </div>
    
</body>
</html>
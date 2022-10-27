<?php

    $w = $_POST['wide'];
    $l = $_POST['long'];
    
    $area = $w * $l;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
body 
    .a {
        color:#FF0066;
    }
</style>
    <center><h3 class="a">สูตรพื้นที่สี่เหลี่ยมผืนผ้า</h3></center>
    <hr color="#FFCC00">
    <center><p style="color: #00CCFF; font-size: 16px">
        <?php
        echo "สูตรพื้นที่สี่เหลี่ยมผืนผ้า<br>";
        echo "ความกว้าง = ".$w;
        echo "<br>";
        echo "ความยาวด้าน = ".$l;
        echo "<br>";   
        echo "มีพื้นที่สี่เหลี่ยมผืนผ้า ทั้งหมด ".$area." ตารางเซนติเมตร";
        ?>
    </p>
    <center>
</body>
</html>
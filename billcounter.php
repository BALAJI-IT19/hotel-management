<?php
include_once 'dblink.php';
$item = $_POST['item'];
$rate = $_POST['rate'];
$name = $_POST['name'];
$num = $_POST['num'];
$sql1 = "INSERT INTO bill ( item , rate , name , num ) values ('$item' , '$rate' , '$name' , '$num');";
mysqli_query($conn , $sql1);
header("Location: ../index.php?billcounter=success");
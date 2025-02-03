<?php
include 'connection.php';

$category=$_POST['category'];
$color=$_POST['color'];
$height=$_POST['height'];
$width=$_POST['width'];
$material=$_POST['material'];
$quantity=$_POST['quantity'];

$sql = "INSERT INTO orderdetails (category, color,height,width, material,quantity) VALUES ('$category','$color','$height','$width','$material','$quantity')";

if($connection->query($sql)==true){
    header("Location:order.html?category=$category&color=$color&height=$height&width=$width&material=$material&quantity=$quantity");
}else{
    echo "Error ".$sql."<br>".$connection->error;
}


$connection->close();
?>

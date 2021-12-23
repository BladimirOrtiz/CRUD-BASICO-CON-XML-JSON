<?php

include("db.php");
$con=mysqli_connect("localhost","root","","bjorshoop");

$id=$_GET['id'];

$sql="DELETE FROM producto  WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: inicio.php");
    }
?>

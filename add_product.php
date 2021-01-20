<?php
// add_department.php

    $name = $_REQUEST["name"];
    $price = $_REQUEST["price"];
    $img = $_REQUEST["img"];
    $detail = $_REQUEST["detail"];
    $size = $_REQUEST["size"];
    $scale = $_REQUEST["scale"];
    $pledge = $_REQUEST["pledge"];

    // echo $id;

//---------------------------------------------------------------------- 
// 1. CONNECT
//---------------------------------------------------------------------- 

require "server.php";

//---------------------------------------------------------------------- 
// 2. SELECT (SQL)
//----------------------------------------------------------------------     
$sql = "INSERT INTO product (name, price, img, detail, size, scale, pledge)";
$sql =  $sql . "VALUE ('$name', '$price', '$img', '$detail', '$size', '$scale', '$pledge')";

echo $sql;

//---------------------------------------------------------------------- 
// 3. EXECUTE
//----------------------------------------------------------------------     
$result = mysqli_query($conn, $sql);

// redirect
// header("Location: department.php");
?>
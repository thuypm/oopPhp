<?php
require 'Student.php';
require 'PrimaryStudent.php';
require 'HighStudent.php';

$servername = "localhost";
$username = "admin";
$password = "admin";
$dbname = "thuypm";
$conn = new mysqli($servername, $username, $password, $dbname);

// $A;
// if($_POST["age"] <15)
// 	$A = new PrimaryStudent($_POST["fullName"],$_POST["age"],$_POST["firstPoint"],$_POST["secondPoint"],$_POST["thirdPoint"],$_POST["address"], $_POST["sex"]);
// else
// 	$A =  new HighStudent($_POST["fullName"],$_POST["age"],$_POST["firstPoint"],$_POST["secondPoint"],$_POST["thirdPoint"],$_POST["address"], $_POST["sex"]);

$sql = "INSERT INTO student (fullName, age, firstPoint,secondPoint,thirdPoint,address,sex)
VALUES ('". $_POST["fullName"] ."','" . $_POST["age"] ."','" . $_POST["firstPoint"] ."','" . $_POST["secondPoint"] ."','" . $_POST["thirdPoint"] ."','"  . $_POST["address"] ."','" . $_POST["sex"] ."')" ;
// echo $sql;
$conn->query($sql);
header("Location: ./viewAll.php")
?>
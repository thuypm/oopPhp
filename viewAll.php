<?php
require 'Student.php';
require 'PrimaryStudent.php';
require 'HighStudent.php';

$servername = "localhost";
$username = "admin";
$password = "admin";
$dbname = "thuypm";
$conn = new mysqli($servername, $username, $password, $dbname);

$listHighStudent = [];
$listPrimaryStudent = [];

$sql = "SELECT * from student";
$result  =  $conn->query($sql);
   while($row = mysqli_fetch_array($result)){
   	
          if($row["age" <15])
          		array_push($listPrimaryStudent, new PrimaryStudent($row["fullName"],$row["age"],$row["firstPoint"],$row["secondPoint"],$row["thirdPoint"],$row["address"], $row["sex"]));
          	else
          		array_push($listPrimaryStudent, new  HighStudent($row["fullName"],$row["age"],$row["firstPoint"],$row["secondPoint"],$row["thirdPoint"],$row["address"], $row["sex"]));
        }
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
 </head>
 <body>
                  </div> 
                 <?php
                 foreach ($listPrimaryStudent as $key => $value) {
                 echo "        
                   <div style='margin-left:25%'>
             				<h5>Họ và tên:<b>".  $value->getFullName(). "</b> </h5>
             				<h5>Tuổi: <b>".$value->getAge()." </b></h5>
             				<h5>Điểm môn 1: <b>".$value->getFirstPoint()." </b></h5>
             				<h5>Điểm môn 2: <b>".$value->getSecondPoint()."</b> </h5>
             				<h5>Điểm môn 3: <b>".$value->getThirdPoint()."</b> </h5>
             				<h5>Địa chỉ: <b>".$value->getAddress()." </b></h5>
             				<h5>Giới tính: <b>".$value->getSex()." </b></h5>
             				<h5>Ghi chú: <b>".$value->cry()." </b></h5>
             				<h5>Điểm TB: <b>".$value->getMediumScore()." </b></h5>
                    </div>";
                    };
                        foreach ($listHighStudent as $key => $value) {
                 echo "        
                   <div style='margin-left:25%'>
             				<h5>Họ và tên: <b>". $value->getFullName(). " </b></h5>
             				<h5>Tuổi: <b>".$value->getAge()." </h5>
             				<h5>Điểm môn 1: <b>".$value->getFirstPoint()."</b> </h5>
             				<h5>Điểm môn 2: <b>".$value->getSecondPoint()." </b></h5>
             				<h5>Điểm môn 3: <b>".$value->getThirdPoint()." </b></h5>
             				<h5>Địa chỉ: <b>".$value->getAddress()."</b> </h5>
             				<h5>Giới tính: <b>".$value->getSex()."</b> </h5>
             				<h5>Ghi chú: <b>".$value->cry()."</b> </h5>
             				<h5>Điểm TB: <b>".$value->getMediumScore()." </b></h5>
                    </div>";
                    }
                    ?>
 </body>
 </html>
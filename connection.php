<?php
$servername ="localhost";
$username="root";
$password="";
$database= "lip";

$conn= new mysqli($servername,$username,$password,$database);
if($conn->connect_error)
{
  die ("Connection nmot Successfull" .$conn->connect_error);
}

// $sql="Create database lip";
// $sql="create table student(id int(6) primary key,name varchar(20),age int(5))";

//  $sql.="insert into student values (2,'anu',12);";
 $sql.="insert into student values (3,'manu',22);";
 $sql.="insert into student values (4,'jinu',32);";
 $sql.="insert into student values (5,'renu',26);";
 $sql.="insert into student values (6,'venu',15);";
if($conn->query($sql)==TRUE){
    echo"Created Successfully";
}
else{
    echo "Not created" ;
}
echo"Successfull";
?>



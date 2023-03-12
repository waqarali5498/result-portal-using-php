<?php
include'connection.php';
$name=$_GET['name'];
$rollno=$_GET['roll'];
$sclas=$_GET['stdclass'];
$descp=$_GET['descp'];

if($name!=""&&$rollno!=""&&$sclas!=""&&$descp!=""){

    $sql="INSERT INTO complain_tbl(Student_Name,Student_Rollno,Student_class,Student_descp) 
    VALUES('$name','$rollno','$sclas','$descp')";
    $row=mysqli_query($conn,$sql);
    if($row){
        echo"Complain Submitted Succesfully";
    }
    else{
        echo"Error Check Kr Le Pehle.....!";
    }
}
else{
    echo"Fill All Fields First Please..!";
}
?>
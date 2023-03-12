<?php
include'connection.php';

$sname=$_GET['sname'];
$sfname=$_GET['sfname'];
$sroll=$_GET['sroll'];
$sclass=$_GET['sclass'];
$scnic=$_GET['scnic'];
$scntct=$_GET['scntct'];


if($sname!=""&&$sfname!=""&&$sroll!=""&&$sclass!=""&&$scnic!=""&&$scntct!=""){
    $sql="INSERT INTO student_tbl(Student_Name,Student_Father_Name,Student_Roll_No,Student_Class,Student_CNIC,Student_Contact)
    VALUE('$sname','$sfname','$sroll','$sclass','$scnic','$scntct')";
    
    $row=mysqli_query($conn,$sql);
    if($row){
        header("location:std_login.php");
    }
    else{
        echo "Error Dhund....!";
    }
}
else{
    echo"Fill All Fields";
}
?>
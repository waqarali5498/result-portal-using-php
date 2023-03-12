<?php
include'connection.php';

$name=$_GET['tname'];
$cnic=$_GET['tcnic'];
$mail=$_GET['tmail'];
$pass=$_GET['tpass'];
$cntct=$_GET['tcntct'];

if($name!=""&&$cnic!=""&&$mail!=""&&$pass!=""&&$cntct!=""){
    $sql="INSERT INTO teacher_tbl(teacher_name,teacher_cnic,teacher_mail,teacher_password,teacher_contact)
    VALUE('$name','$cnic','$mail','$pass','$cntct')";
    
    $row=mysqli_query($conn,$sql);
    if($row){
        header("location:login_as_tchr.php");
    }
    else{
        echo "Error Dhund....!";
    }
}
else{
    echo"Fill All Fields";
}
?>
<?php
include'connection.php';

$tcmail=$_GET['tchrmail'];
$tcpass=$_GET['tchrpass'];

$sql="SELECT * FROM teacher_tbl WHERE teacher_mail='$tcmail' and 	teacher_password='$tcpass'";
$row=mysqli_query($conn,$sql);
$run=mysqli_num_rows($row);

if($run){
    session_start();
    $_SESSION['kye']=true;
    // $_SESSION['name']=$name;
    header("location:show_std_db.php");
    // echo"Teacher Succesfully Login";
}
else{
    echo "!Data Hi Nhi Record Main....LOL";
}



?>
<?php
include'connection.php';

$amail=$_GET['admemail'];
$apass=$_GET['admpass'];

$sql="SELECT * FROM admin_tbl WHERE admin_email='$amail' and admin_password	='$apass'";
$row=mysqli_query($conn,$sql);
$run=mysqli_num_rows($row);

if($run){
    session_start();
    $_SESSION['kye']=true;
    // $_SESSION['name']=$name;
    header("location:admin_dashboard.php");
    // echo"Teacher Succesfully Login";
}
else{
    echo "!Data Hi Nhi Record Main....LOL";
}

$mailuser=$_GET['mailuser'];
where mailuser='$mailuser'


?>
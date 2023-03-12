<?php
include'connection.php';

$sname=$_GET['stdname'];
$sroll=$_GET['stdroll'];

$sql="SELECT * FROM student_tbl WHERE Student_Name='$sname' and Student_Roll_No='$sroll'";
$row=mysqli_query($conn,$sql);
$run=mysqli_num_rows($row);

if($run){
//     $sq="SELECT * FROM `student_tbl` ";
// $ro=mysqli_query($conn,$sq);
// while($res=mysqli_fetch_array($ro)){
//   $id=$res['serial_no'];
  
    session_start();
    $_SESSION['kye']=true;
    // $_SESSION['name']=$name;
    header("location:std_show_result.php?stdroll=$sroll");
    // echo"Student Succesfully Login";
}
// else{
//     echo "!Data Hi Nhi Record Main....LOL";
// }
// }



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Complain</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <center><h1>Delete Student Complains</h1></center>
<table class="table">
  <thead>
    <tr>
    <th scope="col">Student Name</th>
      <th scope="col">Roll No</th>
      <th scope="col">Class</th>
      <th scope="col">Description</th>
      <th scope="col">Button</th>
    </tr>
  </thead>
  <tbody>
   




<?php
include('connection.php');

$id=$_GET['stdroll'];
$sql="DELETE FROM `complain_tbl` WHERE `Student_Rollno`='$id'";
$row=mysqli_query($conn,$sql);
if($row){
  
$sql="SELECT * FROM `complain_tbl`";
$row=mysqli_query($conn,$sql);
while($res=mysqli_fetch_array($row)){
    $empnam=$res['Student_Name'];
        $empdprt=$res['Student_Rollno'];
        $empcnic=$res['Student_class'];
        $empay=$res['Student_descp'];
    echo'
    <td>'.$empnam.'</td>
  <td>'.$empdprt.'</td>
<td>'.$empcnic.'</td>
<td>'.$empay.'</td>
<td><button type="button" class="btn btn-dark"><a href="delete_complain.php?stdroll='.$empdprt.'">Delete</a> </button></td><br>


    
    </tr>';}

}
else{

    echo $conn;
}
?>
  </tbody>
    </table> 
    </body>
    </html>

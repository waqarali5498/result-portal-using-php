<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Teacher</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body><center><h1>Delete Teacher From Database</h1></center>
<table class="table">
  <thead>
    <tr>
    <th scope="col">#</th>
      <th scope="col">Teacher Name</th>
      <th scope="col">Teacher CNIC</th>
      <th scope="col">Teacher Email</th>
      <th scope="col">Teacher Password</th>
      <th scope="col">teacher Contact</th>
            <th scope="col">Button</th>
    </tr>
  </thead>
  <tbody>
   




<?php
include('connection.php');

$sno=$_GET['tserial'];
$sql="DELETE FROM `teacher_tbl` WHERE `serial_no`='$sno'";
$row=mysqli_query($conn,$sql);
if($row){
    $sql="SELECT * FROM `teacher_tbl` ";
    $row=mysqli_query($conn,$sql);
    while($res=mysqli_fetch_array($row)){
          $sno=$res['serial_no'];
        $tn=$res['teacher_name'];
        $tcn=$res['teacher_cnic'];
        $tm=$res['teacher_mail'];
        $tpas=$res['teacher_password'];
        $tcntct=$res['teacher_contact'];
    
    echo'
    <tr>
    <td>'.$sno.'</td>
    <td>'.$tn.'</td>
    <td>'.$tcn.'</td>
    <td>'.$tm.'</td>
    <td>'.$tpas.'</td>
    <td>'.$tcntct.'</td>
    <td><button type="button" class="btn btn-dark"><a href="delete_tchr.php?tserial='.$sno.'">Delete</a> </button></td>
    
    </tr>';
    }
    
}
else{

    echo $conn;
}
?>
  </tbody>
    </table> 
    </body>
    </html>

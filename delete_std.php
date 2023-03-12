<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body><center><h1>Delete Student From Database</h1></center>
<table class="table">
  <thead>
    <tr>
    <th scope="col">#</th>
      <th scope="col">Student Name</th>
      <th scope="col">Student Father Name</th>
      <th scope="col">Student RollNo</th>
      <th scope="col">Student Class</th>
      <th scope="col">Student CNIC</th>
      <th scope="col">Student Contact</th>
      <th scope="col">Button</th>
    </tr>
  </thead>
  <tbody>
   




<?php
include('connection.php');

$srn=$_GET['stdroll'];
$sql="DELETE FROM `student_tbl` WHERE `Student_Roll_No`='$srn'";
$row=mysqli_query($conn,$sql);
if($row){
    $sql="SELECT * FROM `student_tbl` ";
    $row=mysqli_query($conn,$sql);
    while($res=mysqli_fetch_array($row)){
          $sno=$res['serial_no'];
        $sn=$res['Student_Name'];
        $snf=$res['Student_Father_Name'];
        $srn=$res['Student_Roll_No'];
        $sc=$res['Student_Class'];
        $scnic=$res['Student_CNIC'];
        $sctct=$res['Student_Contact'];
    
    echo'
    <tr>
    <td>'.$sno.'</td>
    <td>'.$sn.'</td>
    <td>'.$snf.'</td>
    <td>'.$srn.'</td>
    <td>'.$sc.'</td>
    <td>'.$scnic.'</td>
    <td>'.$sctct.'</td>
    <td><button type="button" class="btn btn-dark"><a href="delete_std.php?srno='.$srn.'">Delete</a> </button></td>
    
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

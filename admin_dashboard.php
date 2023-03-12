<?php
session_start();
if(!isset($_SESSION['kye'])){
    header("location:admin_login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="shortcut icon" href="images/COMSATS_new_logo.jpg" type="image/x-icon">

</head>
<body >
          <!-- Nav Bar -->
<section>
   
          <div class="row">
    <div class="col-md-12">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
    <div class="container-fluid">
      <a class="navbar-brand"  href="#"><img src="images/COMSATS_new_logo.jpg" height="60px" alt="" style="border-radius: 90px;" srcset=""></a>
      
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Welcome To Admin Dashboard</a>
          </li>
          </ul>
    </div>
    <div class="col-md-1">
    <form action="admin_signout.php" method="get" class="form-inline my-2 my-lg-0">
    <center><button class="btn btn-info my-4" type="submit" style="padding: 8px;">Signout</button></center>
    </form>
    </div>
    </div>
          
      </div>
    </div>
  </nav>

</section>
<section>

<center><h1>Summary</h1></center>;    
<div class="container-fluid">
<div class="card text-dark" style="border-radius: 1rem;">
          <div class="card-body text-center">
  <div class="row">
    <div class="col" class=" text-dark" style="font-size:16px ;">Total Number Of Teacher Registered: <p  class="text-info" > <h3><?php
    include('connection.php');
$sql="SELECT * FROM teacher_tbl";
$row=mysqli_query($conn,$sql);
$res=mysqli_num_rows($row);
echo $res;
    ?></p></h3></div>
    <div class="col" class=" text-dark" style="font-size:16px ;">Total Number Of Students Registered: <p class="text-info" > <h3><?php
    include('connection.php');
$sql="SELECT * FROM student_tbl";
$row=mysqli_query($conn,$sql);
$res=mysqli_num_rows($row);
echo $res;
    ?></p></h3></div>
    <div class="col" class=" text-dark" style="font-size:16px ;">Total Number Of Result Declared: <p class="text-info" ><h3> <?php
    include('connection.php');
$sql="SELECT * FROM result_tbl";
$row=mysqli_query($conn,$sql);
$res=mysqli_num_rows($row);
echo $res;
    ?></p></h3></div>
  <div class="col" class=" text-dark" style="font-size:16px ;">Total Number Of Complain Submitted: <p class="text-info" ><h3> <?php
    include('connection.php');
$sql="SELECT * FROM complain_tbl";
$row=mysqli_query($conn,$sql);
$res=mysqli_num_rows($row);
echo $res;
    ?></p></h3></div>
  </div>
</div>
</div>
</div>

<center><h1>Registrations</h1></center>;    
<div class="container-fluid">
<div class="card text-white" style="border-radius: 1rem;">
          <div class="card-body text-center">
  <div class="row">
    <div class="col"><a href="tchr_register.php" class=" text-dark" style="font-size:16px ;">Register New Teacher</a></div>
    
  <div class="col"><a href="student_register.php" class=" text-dark" style="font-size:16px ;">Register New Student</a></div>
  </div>
</div>
</div>
</div>

<center><h1>Teacher Database</h1></center>;
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
include'connection.php';
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

?>
                </tbody>
</table>
    </body>
    </html>

</section>
<center><h1>Student Database</h1></center>;
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
include'connection.php';
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
<td><button type="button" class="btn btn-dark"><a href="enter_result.php?stdroll='.$srn.'&stdname='.$sn.'&stdclass='.$sc.'">Enter Result</a> </button>
<button type="button" class="btn btn-dark"><a href="admin_show_result.php?stdroll='.$srn.'&stdname='.$sn.'&stdclass='.$sc.'">See Result</a> </button>
<button type="button" class="btn btn-dark"><a href="delete_std.php?stdroll='.$srn.'">Delete</a> </button></td>

</tr>';
}

?>
                </tbody>
</table>
    </body>
    </html>

    <center><h1>Student Complains</h1></center>;
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
    <tr>
    <?php
include'connection.php';
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
<td><button type="button" class="btn btn-dark">Update Result</button>
<button type="button" class="btn btn-dark"><a href="delete_complain.php?stdroll='.$empdprt.'">Delete</a> </button></td><br>


    
    </tr>';}
?>
    
  </tbody>
</table>

    <!-- Footer -->
<section>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
    <div class="container-fluid">
      <a class="navbar-brand"  href="#"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <ul class="nav-item">
            <a class="nav-link active" aria-current="page" href="https://www.instagram.com/cuinews">CUI Official Facebook Page:<br>
                https://www.facebook.com/cuiofficial</a>
          </ul>
          <ul class="nav-item">
            <a class="nav-link active" aria-current="page" href="https://www.instagram.com/cuinews">CUI Official Twitter Page:<br>
                https://twitter.com/CUIofficial</a>
          </ul><ul class="nav-item ">
            <a class="nav-link active" aria-current="page" href="https://www.instagram.com/cuinews">CUI Official Instagram Page:<br>
                https://www.instagram.com/cuinews</a>
          </ul>
         
                  </ul>
        <form class="d-flex">
            <a class="nav-link active" aria-current="page" href="#">© 2021 COMSATS University Islamabad,<br>
                Designed by: Waqar Ali</a>
        </form>
      </div>
    </div>
  </nav>
</section>
    </body>
    </html>
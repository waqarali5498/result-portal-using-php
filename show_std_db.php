<?php
session_start();
if(!isset($_SESSION['kye'])){
    header("location:index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Teacher</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="shortcut icon" href="images/COMSATS_new_logo.jpg" type="image/x-icon">

</head>
<body >
          <!-- Nav Bar -->
<section>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
    <div class="container-fluid">
      <a class="navbar-brand"  href="#"><img src="images/COMSATS_new_logo.jpg" height="60px" alt="" style="border-radius: 90px;" srcset=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Welcome To Student Database And Complain Portal</a>
          </li>
          </ul>
        <form class="d-flex">
       
        </form>
      </div>
    </div>
  </nav>
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
<td><button type="button" class="btn btn-dark"><a href="enter_result.php?stdroll='.$srn.'&stdname='.$sn.'&stdclass='.$sc.'">Enter Result</a> </button></td>

</tr>';
}

?>
                </tbody>
</table>
    </body>
    </html>

    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Complains</title>
    <link rel="shortcut icon" href="images/COMSATS_new_logo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>
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
<td><button type="button" class="btn btn-dark">Update Result</button></td><br>

    
    </tr>';}
?>
    
  </tbody>
</table>
<form action="tchr_signout.php" method="get">
    <center><button class="btn btn-dark my-4" type="submit" style="padding: 8px;">Signout</button></center>
    </form>
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
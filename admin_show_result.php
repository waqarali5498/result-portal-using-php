<?php
session_start();
if(!isset($_SESSION['kye'])){
    header("location:std_login.php");
    exit;
}?>
 <?php
include'connection.php';

  $sroll=$_GET['stdroll'];

$sql="SELECT * FROM `result_tbl` where Student_Roll_No='$sroll'";
$row=mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result Annual Term</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="shortcut icon" href="images/COMSATS_new_logo.jpg" type="image/x-icon">
</head>
<body>
    <!-- Nav Bar -->
    <section>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
    <div class="container-fluid">
      <a class="navbar-brand"  href="#"><img src="images/COMSATS_new_logo.jpg" height="60px" alt="" style="border-radius: 90px;" srcset=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto ">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#"><b>Welcome To Student Result</b></a>
          </li>
          </ul>
              </div>
    </div>
  </nav>
</section>
<table class="table">
<thead>
    <tr>
      <th scope="col">Student Name:   <?php $sroll=$_GET['stdroll']; $sql="SELECT * FROM `result_tbl` where Student_Roll_No='$sroll'";
$row=mysqli_query($conn,$sql);while($res=mysqli_fetch_array($row)){echo$res['Student_Name'];}?></th>
      <th scope="col"> Student Class:  <?php $sroll=$_GET['stdroll']; $sql="SELECT * FROM `result_tbl` where Student_Roll_No='$sroll'";
$row=mysqli_query($conn,$sql);while($res=mysqli_fetch_array($row)){echo$res['student_class'];}?></th>
      <th scope="col">Student Rollno:    <?php $sroll=$_GET['stdroll']; $sql="SELECT * FROM `result_tbl` where Student_Roll_No='$sroll'";
$row=mysqli_query($conn,$sql);while($res=mysqli_fetch_array($row)){echo$res['Student_Roll_No'];}?></th>
</tr>
<th scope="col">Subject</th>
      <th scope="col"> Secured Marks</th>
      <th scope="col">Total Marks:</th>
</tr>
<th scope="col">English</th>
      <th scope="col">    <?php $sroll=$_GET['stdroll']; $sql="SELECT * FROM `result_tbl` where Student_Roll_No='$sroll'";
$row=mysqli_query($conn,$sql);while($res=mysqli_fetch_array($row)){echo$res['marks_english'];}?></th>
      <th scope="col">    <?php $sroll=$_GET['stdroll']; $sql="SELECT * FROM `result_tbl` where Student_Roll_No='$sroll'";
$row=mysqli_query($conn,$sql);while($res=mysqli_fetch_array($row)){echo$res['tmarks_eng'];}?></th>
</tr>

<th scope="col">Urdu</th>
      <th scope="col">    <?php $sroll=$_GET['stdroll']; $sql="SELECT * FROM `result_tbl` where Student_Roll_No='$sroll'";
$row=mysqli_query($conn,$sql);while($res=mysqli_fetch_array($row)){echo$res['marks_urdu'];}?></th>
      <th scope="col">    <?php $sroll=$_GET['stdroll']; $sql="SELECT * FROM `result_tbl` where Student_Roll_No='$sroll'";
$row=mysqli_query($conn,$sql);while($res=mysqli_fetch_array($row)){echo$res['tmarks_urdu'];}?></th>
</tr>
<th scope="col">Math</th>
      <th scope="col">    <?php $sroll=$_GET['stdroll']; $sql="SELECT * FROM `result_tbl` where Student_Roll_No='$sroll'";
$row=mysqli_query($conn,$sql);while($res=mysqli_fetch_array($row)){echo$res['marks_math'];}?></th>
      <th scope="col">    <?php $sroll=$_GET['stdroll']; $sql="SELECT * FROM `result_tbl` where Student_Roll_No='$sroll'";
$row=mysqli_query($conn,$sql);while($res=mysqli_fetch_array($row)){echo$res['tmarks_math'];}?></th>
</tr>
<th scope="col">Physics</th>
      <th scope="col">    <?php $sroll=$_GET['stdroll']; $sql="SELECT * FROM `result_tbl` where Student_Roll_No='$sroll'";
$row=mysqli_query($conn,$sql);while($res=mysqli_fetch_array($row)){echo$res['marks_physics'];}?></th>
      <th scope="col">    <?php $sroll=$_GET['stdroll']; $sql="SELECT * FROM `result_tbl` where Student_Roll_No='$sroll'";
$row=mysqli_query($conn,$sql);while($res=mysqli_fetch_array($row)){echo$res['tmarks_physics'];}?></th>
</tr>
<th scope="col">Bio/Com</th>
      <th scope="col">    <?php $sroll=$_GET['stdroll']; $sql="SELECT * FROM `result_tbl` where Student_Roll_No='$sroll'";
$row=mysqli_query($conn,$sql);while($res=mysqli_fetch_array($row)){echo$res['marks_bio_com'];}?></th>
      <th scope="col">    <?php $sroll=$_GET['stdroll']; $sql="SELECT * FROM `result_tbl` where Student_Roll_No='$sroll'";
$row=mysqli_query($conn,$sql);while($res=mysqli_fetch_array($row)){echo$res['tmarks_bio_com'];}?></th>
</tr>
<th scope="col">Chemistry</th>
      <th scope="col">    <?php $sroll=$_GET['stdroll']; $sql="SELECT * FROM `result_tbl` where Student_Roll_No='$sroll'";
$row=mysqli_query($conn,$sql);while($res=mysqli_fetch_array($row)){echo$res['marks_chem'];}?></th>
      <th scope="col">    <?php $sroll=$_GET['stdroll']; $sql="SELECT * FROM `result_tbl` where Student_Roll_No='$sroll'";
$row=mysqli_query($conn,$sql);while($res=mysqli_fetch_array($row)){echo$res['tmarks_chem'];}?></th>
</tr>
<th scope="col">Islamiat</th>
      <th scope="col">    <?php $sroll=$_GET['stdroll']; $sql="SELECT * FROM `result_tbl` where Student_Roll_No='$sroll'";
$row=mysqli_query($conn,$sql);while($res=mysqli_fetch_array($row)){echo$res['marks_isl'];}?></th>
      <th scope="col">    <?php $sroll=$_GET['stdroll']; $sql="SELECT * FROM `result_tbl` where Student_Roll_No='$sroll'";
$row=mysqli_query($conn,$sql);while($res=mysqli_fetch_array($row)){echo$res['tmarks_isl'];}?></th>
</tr>
<th scope="col">Pak.Studies</th>
      <th scope="col">    <?php $sroll=$_GET['stdroll']; $sql="SELECT * FROM `result_tbl` where Student_Roll_No='$sroll'";
$row=mysqli_query($conn,$sql);while($res=mysqli_fetch_array($row)){echo$res['marks_pst'];}?></th>
      <th scope="col">    <?php $sroll=$_GET['stdroll']; $sql="SELECT * FROM `result_tbl` where Student_Roll_No='$sroll'";
$row=mysqli_query($conn,$sql);while($res=mysqli_fetch_array($row)){echo$res['tmarks_pst'];}?></th>
</tr>
<th scope="col">Total Marks:    <?php $sroll=$_GET['stdroll']; $sql="SELECT * FROM `result_tbl` where Student_Roll_No='$sroll'";
$row=mysqli_query($conn,$sql);while($res=mysqli_fetch_array($row)){echo$res['total_marks'];}?></th>
      <th scope="col">Marks Secured:    <?php $sroll=$_GET['stdroll']; $sql="SELECT * FROM `result_tbl` where Student_Roll_No='$sroll'";
$row=mysqli_query($conn,$sql);while($res=mysqli_fetch_array($row)){echo$res['marks_secured'];}?></th>
      <th scope="col">Percentage:    <?php $sroll=$_GET['stdroll']; $sql="SELECT * FROM `result_tbl` where Student_Roll_No='$sroll'";
$row=mysqli_query($conn,$sql);while($res=mysqli_fetch_array($row)){echo$res['percentage'];}?></th>
</tr><th scope="col">Result:    <?php $sroll=$_GET['stdroll']; $sql="SELECT * FROM `result_tbl` where Student_Roll_No='$sroll'";
$row=mysqli_query($conn,$sql);while($res=mysqli_fetch_array($row)){echo$res['final_result'];}?></th>
      <th scope="col">Grade:    <?php $sroll=$_GET['stdroll']; $sql="SELECT * FROM `result_tbl` where Student_Roll_No='$sroll'";
$row=mysqli_query($conn,$sql);while($res=mysqli_fetch_array($row)){echo$res['grade'];}?></th>
     
</tr>
   <!-- <button>Logout</button> -->
  </thead>
  <tbody> 

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      </body>
    </html>
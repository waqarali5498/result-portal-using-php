<?php
session_start();
if(!isset($_SESSION['kye'])){
    header("location:index.php");
    exit;
}
?>
<?php
$srn=$_GET['stdroll'];
$sn=$_GET['stdname'];
$scl=$_GET['stdclass'];


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Marks Submission Form</title>
    <link rel="shortcut icon" href="images/COMSATS_new_logo.jpg" type="image/x-icon">
  </head>
  <body style="background-color: skyblue;">
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
            <a class="nav-link active" aria-current="page" href="#">Welcome To Student Marks Submission</a>
          </li>
          </ul>
        
      </div>
    </div>
  </nav>
</section>
  <?php include'connection.php';?>

  <section class="vh-100 gradient-custom">
  <div class="container-fluid py-2 ">
     <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-6 col-xl-6">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">
            <div class=""> 
              <h2 class="fw-bold mb-2 text-uppercase">Enter Details Of Result</h2>
              
          <form class="mx-1 mx-md-4" action="insert_result.php" action="Post">
            <div class="row">
              <div class="">
                <input type="text" name="sname" id="sname" class="form-control form-control-sm "readonly />
                <label class="form-label" for="sname">Student Name</label>
              </div>

              <div class="col-md-6 mb-4">
                <input type="text" name="sclass" id="sclass" class="form-control form-control-sm"readonly />
                <label class="form-label" for="sclass">Student Class</label>
              </div>

              <div class="col-md-6 mb-4">
                <input type="text" name="sroll" id="sroll" class="form-control form-control-sm" readonly/>
                <label class="form-label" for="sroll">Student Roll No</label>
              </div>
              </div>
              <section>
        <table class="table table-dark">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Subject</th>
                <th scope="col">Secured Marks</th>
                <th scope="col">Total Marks</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>English</td>
                <td><input type="number" name="esm" id="typeEmailX" class="col-md-6 " /></td>
                <td><input type="number" name="etm" id="typeEmailX" class="col-md-6 " /></td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Urdu</td>
                <td><input type="number" name="usm" id="typeEmailX" class="col-md-6" /></td>
                <td><input type="number" name="utm" id="typeEmailX" class="col-md-6" /></td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Math</td>
                <td><input type="number" name="msm" id="typeEmailX" class="col-md-6" /></td>
                <td><input type="number" name="mtm" id="typeEmailX" class="col-md-6" /></td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td>Physics</td>
                <td><input type="number" name="psm" id="typeEmailX" class="col-md-6" /></td>
                <td><input type="number" name="ptm" id="typeEmailX" class="col-md-6" /></td>
              </tr>
              <tr>
                <th scope="row">5</th>
                <td>Bio/Comp</td>
                <td><input type="number" name="bcsm" id="typeEmailX" class="col-md-6" /></td>
                <td><input type="number" name="bctm" id="typeEmailX" class="col-md-6" /></td>
              </tr>
              <tr>
                <th scope="row">6</th>
                <td>Chemistry</td>
                <td><input type="number" name="csm" id="typeEmailX" class="col-md-6" /></td>
                <td><input type="number" name="ctm" id="typeEmailX" class="col-md-6" /></td>
              </tr>
              <tr>
                <th scope="row">7</th>
                <td>Islamiat</td>
                <td><input type="number" name="ism" id="typeEmailX" class="col-md-6" /></td>
                <td><input type="number" name="itm" id="typeEmailX" class="col-md-6" /></td>
              </tr>
              <tr>
                <th scope="row">8</th>
                <td>Pak-Studies</td>
                <td><input type="number" name="psm" id="typeEmailX" class="col-md-6" /></td>
                <td><input type="number" name="ptm" id="typeEmailX" class="col-md-6" /></td>
              </tr>
              
            </tbody>
          </table>
          <div class="row">
          <button onclick="ac()"  class="btn btn-outline-light"  type="button">Auto Fill Other Fields</button></div>
          <hr>
    </section>
              <div class="row">
              <div class="col-md-4 mb-2">
                <input type="number" name="tmarks" id="tmarks" class="form-control form-control-sm" readonly/>
                <label class="form-label" for="typeEmailX">Total Marks</label>
              </div>

              <div class="col-md-4 mb-2">
                <input type="number" name="smarks" id="smarks" class="form-control form-control-sm" readonly/>
                <label class="form-label" for="typeEmailX">Secured Marks</label>
              </div>

              
              <div class="col-md-4 mb-2">
                <input type="number" name="marksprnct" id="marksprcnt" class="form-control form-control-sm" min-2 max-4 readonly/>
                <label class="form-label" for="typeEmailX">Percentage</label>
              </div></div>
              <div class="row"> 
              <div class="col-md-6 mb-4">
                <input type="text" name="freslt" id="freslt" class="form-control form-control-sm" readonly/>
                <label class="form-label" for="typeEmailX">Final Result</label>
              </div>
              <div class="col-md-6 mb-4">
                <input type="text" name="sgrade" id="sgrade" class="form-control form-control-sm" readonly/>
                <label class="form-label" for="typeEmailX">Grade</label>
              </div>
              <div class="row">
              <button class="btn btn-outline-light " name="submit" type="submit">Save Marks To Database</button>
                        
            </div></form>
            <form action="tchr_signout.php" method="get">
    <center><button class="btn btn-dark my-4  btn-outline-light" type="submit" style="padding: 8px;">Signout</button></center>
    </form>
         </div>
        </div>
      </div>
    </div>
  </div>
</section>
  

    <!-- Footer -->
    <section style="margin-top: 540px;">
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
  <script src="themes/result_enter.js"></script>
<script>
var rollno='<?= $srn?>';
var name='<?= $sn?>';
var stdclass='<?= $scl?>';



sroll.value=rollno;
sname.value=name;
sclass.value=stdclass;


    </script>
 
  </body>
</html>
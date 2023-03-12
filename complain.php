<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Student Complain Form</title>
    <link rel="shortcut icon" href="images/COMSATS_new_logo.jpg" type="image/x-icon">
  </head>
  <body style="background-color: skyblue;">
  <?php include'connection.php';?>
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
            <a class="nav-link active" aria-current="page" href="#">Welcome To Student Compalin Portal</a>
          </li>
          </ul>
              </div>
    </div>
  </nav>
</section>
  <section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">
            <div class="mb-md-5 mt-md-4 ">
              <h2 class="fw-bold mb-2 text-uppercase">Student Complian</h2>
              
          <form class="mx-1 mx-md-4" action="complain_insert.php" action="post">
              <div class="form-outline form-white mb-2">
                <input type="text" name="name" id="typeEmailX" class="form-control form-control-sm" />
                <label class="form-label" for="typeEmailX">Student Name</label>
              </div>
              <div class="form-outline form-white mb-2">
                <input type="text" name="roll" id="typeEmailX" class="form-control form-control-sm" />
                <label class="form-label" for="typeEmailX">Roll No </label>
              </div>
              <div class="form-outline form-white mb-2">
                <input type="text" name="stdclass" id="typeEmailX" class="form-control form-control-sm" />
                <label class="form-label" for="typeEmailX">Class</label>
              </div>
<textarea name="descp" cols="30"  rows="06" class="form-control form-control-sm">
              
                </textarea>
                <label for="textarea">Description</label>
              </div>
              
              <button class="btn btn-outline-light btn-sm px-5" name="submit" type="submit">Submit Complain</button>
              
            </div></form>
         </div>
        </div>
      </div>
    </div>
  </div>
</section>
  

    <!-- Footer -->
    <section style="margin-top: 200px;">
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
<?php
  require'inc/connect.php';

  if (isset($_POST['zikwalk database'])) {
      if(!preg_match_all('/[a-z, ]/i',$_POST['fname'])){
          echo'<div class = "bg-danger text-light p-2">
          Fulname requires only alphabet!</div>';
      }else if(!preg_match_all('/[a-z,0-9]/i',$_POST['user'])){
          echo'<div class = "bg-danger text-light p-2">
          Username requires only alphanumeric!</div>';
      }else if($_POST['pass'] != $_POST['rpass']){
          echo'<div class = "bg-danger text-light p-2">
          Password mismatch!</div>';
      }else{
          $_SESSION['fname'] = mysqli_real_escape_string($ret,$_POST['fname']);
          $_SESSION['uemail'] = mysqli_real_escape_string($ret,$_POST['uemail']);
          $_SESSION['user'] = mysqli_real_escape_string($ret,$_POST['user']);
          $_SESSION['pass'] = mysqli_real_escape_string($ret,$_POST['pass']);
          echo'<script> window.location.href = "verify.php";</script>';
      }
  }

 echo '
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-Up</title>
    <!-- links -->
    <!-- Bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.min.css">
    <link rel="stylesheet" href="styles.css">

</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-dark">
            <div class="container-fluid">
                <div class="logo-container d-flex
                px-3">
                  <div><a href="#" class="font-logo mx-1 d-flex align-items-end">zikwalk</a></div>
                  <span class="font-logo"><box-icon name="map" class="map-logo" color="#24A90A" ></box-icon></span>
                </div>
                <div class="" id="navmenu ">
                  <ul class="navbar-nav ms-auto mx-3">
                    <li class="nav-item">
                        <a href="#" class="nav-link text-light fw-bold">Log In</a>
                    </li>
                  </ul>
                </div>
                
                </div>
         
        </nav>
    </header>
       <section class="p-4 p-sm-3 pt-4">
          <div class="row justify-content-center mb-3">
            <div class="col col-md-6 p-lg-4 p-sm-1">
              <h1 class="font-heavy">Welcome to Zikwalk.Live</h1>
              <div class="text">
                  <p class="text-light my-4">To continue using Zikwalk, choose a username, choose your password or connect via Google.</p>
              </div>
              <div class="img-container mb-5 d-flex align-items-end">
                <div class="d-none d-md-block"><img src="./images/doobry-gps-showing-location.png" alt="" class="img-fluid"></div>
                <div class="map-art"><img src="./images/isometric-map.png" alt="" class="img-fluid"></div>
              </div>
            </div>
            <div class="col col-lg-4 p-lg-4 p-sm-2">
               <form action="" method="post"class="bg-white p-5 pt-4 form-container">
                <div class="">
                    <label for="first-name" class="col-form-label text-dark">
                      Name
                    </label>
                    <input type="text" class="form-control" name="fname" id="first-name" />
                  </div>
                <div class="">
                    <label for="first-name" class="col-form-label text-dark">
                      E-mail address
                    </label>
                    <input type="text" class="form-control" name="email" id="first-name" />
                  </div>
                <div class="">
                    <label for="first-name" class="col-form-label text-dark">
                      Usermame
                    </label>
                    
                    <input type="text" class="form-control" name="user" placeholder="@" />
                  </div>
                <div class="">
                    <label for="first-name" class="col-form-label text-dark">
                      Password
                    </label>
                    <input type="password" class="form-control" name="pass" id="first-name" />
                  </div>
                <div class="">
                    <label for="first-name" class="col-form-label text-dark">
                      Confirm Password
                    </label>
                    <input type="password" class="form-control" name="rpass" id="first-name" />
                  </div>
                  <div class="my-3">
                    <button type="submit" class="form-control bg-my-btn text-light" name="zikwalk database">Sign-Up</button>
                  </div>
                  <div class="options-container">
                    <div class="text-center text-muted mb-3">Or</div>
                    <button type="submit" class="form-control bg-google-btn text-light mb-3"><span><iconify-icon icon="logos:google-icon"></iconify-icon></span><span class="text-muted m-2">Continue with Google</span></button>
                    <p class="text-center text-muted">By continuing you agree to zikwalk Terms and Condition.</p>
                  </div>
               </form>
            </div>
          </div>
       </section>

    <!-- Bootstrap script cdn -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</body>
</html>
 
 
 '
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SignIn</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="IMAGE/favicon.ico">
  </head>
  <body>
    <!-- main container -->
   <div class="container-fluid">
    <div class="row justify-content-evenly pt-5 pt-b ">
        <div class="col-md-5 border-end border-primary">
        <h5 class="text-center "><u><a href="youAre.php" class="text-decoration-none"><span
          class="text-info h1">KU</span></a></u>Placements</h5>
        <!-- slider -->
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images2/job6.jpg" class="d-block w-100 " style="height: 500px;"  alt="...">
              </div>
              <div class="carousel-item">
                <img src="images2/job7.jpg" class="d-block w-100 " style="height: 500px;" alt="...">
              </div>
              <div class="carousel-item">
                <img src="images2/job5.jpg" class="d-block w-100 " style="height: 500px;" alt="...">
              </div>
              <div class="carousel-item">
                <img src="images2/job8.jpg" class="d-block w-100 " style="height: 500px;" alt="...">
              </div>
            </div>
          </div>
        </div>

        <!-- signIn page -->
        <div class="col-md-5 ">
             <h4 class="text-primary-emphasis text-center">Welcome Back</h4>
            <form method="post" enctype='multipart/form-data'>

                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email Id</label>
                  <input type="email" name="signupEmail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Enter Your Password</label>
                  <input type="password" name="signupPassword" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                </div>
                <button type="submit" class="btn btn-primary" style="width: 100%;">Submit</button>
                <p class="text-center text-secondary mt-2">Don't have an account? <a href="signUp.php" class="text-decoration-none  link-primary">Sign up</a></p>

                <?php
                $link = mysqli_connect("localhost","root","","jobs");
                                        session_start();
                                    if(isset($_POST['signupEmail'])  && isset($_POST['signupPassword']))
                                    {   
                                        //$link = mysqli_connect("localhost","root","","jobs");
                                        $ssql = "select * from student where email='".$_POST['signupEmail']."' and password='".$_POST['signupPassword']."'";
                                        $row = mysqli_query($link,$ssql);
                                        if(mysqli_num_rows($row) > 0){
                                            $arr = mysqli_fetch_assoc($row);
                                            // print_r($arr);
                                            // die;

                                            $_SESSION['sname'] = $arr['email'];
											                      //$_SESSION['username'] = $arr['name'];
											
											// print_r($_SESSION['sname']);
                                            // die;
                                            echo"<script>window.location='jobsOpenning.php';</script>";
											
                                        }else{
                                            echo"<script>alert('Please check the email and password again and login');window.location='signIn.php';</script>";
                                        }
                                    }
                                ?>
              
              
              </form>
        </div>
    </div>

    <!-- container end -->
   </div>  


    <!-- Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
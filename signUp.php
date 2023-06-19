<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SignUp</title>
    <!-- Bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="icon" type="image/x-icon" href="IMAGE/favicon.ico">
    </head>

    <?php

    //$link = mysqli_connect("localhost","root","","jobs");
    
    // if(!empty($_SESSION['sname']))
    // {
    // echo"<script>window.location='index.php';</script>";
    // }
    
    ?>


<body>
    <div class="container-fluid">
        <div class="row justify-content-evenly pt-5 pt-b">
            <div class="col-md-5 border-end border-primary">
                <h5 class="text-center "><u><a href="youAre.html" class="text-decoration-none"><span
                    class="text-info h1">KU</span></a></u>Placements</h5>
                <!-- slider -->
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images2/job6.jpg" class="d-block w-100 " style="height: 500px;" alt="...">
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

            <!-- signUp page -->
            <div class="col-md-5 " class="text-secondary">
                <h2 class="text-primary-emphasis text-center">Welcome!</h2>
                <form method="post" enctype='multipart/form-data'>

                <?php
                $link=mysqli_connect("localhost","root","","jobs");
if(isset($_POST['fname']) && isset($_POST['email']) && isset($_POST['mobile'])){
$qry="INSERT INTO student(fname,lname,dob,gender,email,phone,college,reg_no,course,branch,password) values ('".$_POST['fname']."','".$_POST['lname']."','".$_POST['dob']."','".$_POST['gender']."','".$_POST['email']."','".$_POST['mobile']."','".$_POST['college']."','".$_POST['reg']."','".$_POST['course']."','".$_POST['branch']."','".$_POST['pass']."')";
$result = mysqli_query($link,$qry);
$id = mysqli_insert_id($link); 
    if($id>0)
    {
    
    	echo"<script>alert('Registration Sucessfull!!!');window.location='signIn.php';</script>";
    }
}
?>

                    <div class="row pt-4">
                        <div class="col">
                            <label for="First name" class="form-label h6"> First Name</label>
                            <input name="fname" required type="text" class="form-control" placeholder=" First Name" aria-label=" First name">
                        </div>

                        <div class="col">
                            <label for="Last name" class="form-label h6">Last Name</label>
                            <input required type="text" name="lname" class="form-control" placeholder="Last name" aria-label="Last name">
                        </div>
                    </div>

                    <div class="row pt-4">
                        <div class="col">
                            <label for="DOB" class="form-label h6"> Date of Birth</label>
                            <input required type="date" name="dob" class="form-control" placeholder=" DOB" aria-label="DOB">
                        </div>
                        
                        <div class="col">
                            <label for="Gender" class="form-label h6">Gender</label>
                            <select required class="form-select" aria-label="Default select example" name="gender">
                                <option >Select...</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>
                    </div>

                    <div class="row pt-4">
                        <div class="col">
                            <label for="Email" class="form-label h6"> Email</label>
                            <input required type="text" name="email" class="form-control" placeholder=" Email" aria-label="Email">
                        </div>

                        <div class="col">
                            <label for="Mobile Number" class="form-label h6">Mobile Number</label>
                            <input required type="text" name="mobile" class="form-control" placeholder="Number" aria-label="Mobile Number">
                        </div>
                    </div>

                    <div class="row pt-4">
                        <div class="col">
                            <label for="University/College Name" class="form-label h6">University/College Name</label>
                            <input required type="text" name="college" class="form-control" placeholder="College name" aria-label="Email">
                        </div>

                        <div class="col">
                            <label for="Registration Number" class="form-label h6">Registration Number</label>
                            <input required type="text" name="reg" class="form-control" placeholder="Reg. No." aria-label="Registration Number">
                        </div>
                    </div>
 
                    <div class="row pt-4">
                        <div class="col">
                            <label for="Course" class="form-label h6">Course</label>
                            <input required type="text" name="course" class="form-control" placeholder="B.Tech" aria-label="Email">
                        </div>

                        <div class="col">
                            <label for="Branch" class="form-label h6">Branch</label>
                            <input required type="text" name="branch" class="form-control" placeholder="I.T" aria-label="Registration Number">
                        </div>
                    </div>


                    <div class="row pt-4">
                        <div class="col">
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label h6">Password</label>
                                <input required type="password" name="pass" class="form-control"placeholder="Choose password" id="exampleInputPassword1">
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label h6">Confirm Password</label>
                                <input required type="password" class="form-control"placeholder="Confirm password" id="exampleInputPassword1">
                            </div>
                        </div>
                    </div>


                    


                    <div class="row">
                        <div class="col">

                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-light border" type="button">Register</button>
                            </div>
                        </div>
                    </div>
                    <p class="text-center text-secondary mt-2">Already have an account? <a href="signIn.php" class="text-decoration-none  link-primary">Login</a></p>
                    



                </form>
            </div>
        </div>

    </div>

    <!-- container-end  -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>
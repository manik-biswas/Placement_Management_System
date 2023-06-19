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

<body>
    <div class="container-fluid">
        <div class="row justify-content-evenly pt-5 pt-b">
            <div class="col-md-5 border-end border-primary">
                <h5 class="text-center "><u><span class="text-info h1">KU</span></u>Placements</h5>
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
            <div class="col-md-5 " >
                <h2 class="text-primary-emphasis text-center">Welcome!</h2>
                <form method="post" enctype='multipart/form-data' class="text-secondary">
                <?php

$conn=mysqli_connect("localhost","root","","jobs");
if(isset($_POST['fname']) && isset($_POST['orgname']) && isset($_POST['email']) && isset($_POST['orgtype'])){

    $mqry="INSERT INTO company(fname,lname,org_name,org_type,email,phone,password) values ('".$_POST['fname']."','".$_POST['lname']."','".$_POST['orgname']."','".$_POST['orgtype']."','".$_POST['email']."','".$_POST['mobile']."','".$_POST['pass']."')";
    $res=mysqli_query($conn,$mqry);
    $sn = mysqli_insert_id($conn); 
    if($sn>0){

        echo"<script>window.location='sign_In.php';</script>";
    }
}

?>

                    <div class="row pt-4">
                        <div class="col">
                            <label for="First name" class="form-label h6"> First Name</label>
                            <input required type="text" name="fname" class="form-control" placeholder=" Frist Name" aria-label=" First name">
                        </div>

                        <div class="col">
                            <label for="Last name" class="form-label h6">Last Name</label>
                            <input required type="text" name="lname" class="form-control" placeholder="Last name" aria-label="Last name">
                        </div>
                    </div>

                    <div class="row pt-4">
                        <div class="col">
                            <label for="DOB" class="form-label h6">Organization Name</label>
                            <input required type="text" name="orgname" class="form-control" placeholder="Organization name" aria-label="DOB">
                        </div>
                        
                        <div class="col">
                            <label for="Gender" class="form-label h6">Organization Type</label>
                            <select required name="orgtype" class="form-select" aria-label="Default select example">
                                <option selected>Select...</option>
                                <option value="Service-based">Service-Based</option>
                                <option value="Product-Based">Product-Based</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>
                    </div>

                    <div class="row pt-4">
                        <div class="col">
                            <label for="Email" class="form-label h6"> Email</label>
                            <input required name="email" type="email" class="form-control" placeholder=" Email" aria-label="Email">
                        </div>

                        <div class="col">
                            <label for="Mobile Number" class="form-label h6">Mobile Number</label>
                            <input required name="mobile" type="tel" class="form-control" placeholder="Number" aria-label="Mobile Number">
                        </div>
                    </div>

                    <div class="row pt-4">
                        <div class="col">
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label h6">Password</label>
                                <input required name="pass" type="password" class="form-control"placeholder="Choose password" id="exampleInputPassword1">
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
                                <button class="btn btn-light border" type="submit">Register</button>
                            </div>
                        </div>
                    </div>
                    <p class="text-center text-secondary mt-2">Already have an account? <a href="sign_In.php" class="text-decoration-none  link-primary">Login</a></p>
                  

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
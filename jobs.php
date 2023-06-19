<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="/IMAGE/favicon.ico">
    
    <title>Apply For Job</title>
  </head>
  <body>
    <div class="container-fluid">
      <section style="background-color: #0B2447;">
        <div class="container h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-9">
      
              <h1 class="text-white mb-4">Apply for a job</h1>
                <form method="post" enctype='multipart/form-data'>
              <div class="card" style="border-radius: 15px;">
                <div class="card-body">
      
                  <div class="row align-items-center pt-4 pb-3">
                    <div class="col-md-3 ps-5">
      
                      <h6 class="mb-0">Full name</h6>
      
                    </div>
                    <div class="col-md-9 pe-5">
      
                      <input type="text" name="fname" class="form-control form-control-lg" />
      
                    </div>
                  </div>
      
                  <hr class="mx-n3">
      
                  <div class="row align-items-center py-3">
                    <div class="col-md-3 ps-5">
      
                      <h6 class="mb-0">Email address</h6>
      
                    </div>
                    <div class="col-md-9 pe-5">
      
                      <input type="email" name="email" class="form-control form-control-lg" placeholder="" />
      
                    </div>
                  </div>
      
                  <hr class="mx-n3">
      
                  <div class="row align-items-center py-3">
                    <div class="col-md-3 ps-5">
      
                      <h6 class="mb-0">Mobile Number</h6>
      
                    </div>
                    <div class="col-md-9 pe-5">
      
                      <input type="tel" name="phone" class="form-control form-control-lg" placeholder="" />
      
                    </div>
                  </div>
      

                  <hr class="mx-n3">
      
                  <div class="row align-items-center py-3">
                    <div class="col-md-3 ps-5">
      
                      <h6 class="mb-0">Why we should hire you?</h6>
      
                    </div>
                    <div class="col-md-9 pe-5">
      
                      <textarea class="form-control" name="msg" rows="3" placeholder="Message sent to the employer"></textarea>
      
                    </div>
                  </div>
      
                  <hr class="mx-n3">
      
                  <div class="row align-items-center py-3">
                    <div class="col-md-3 ps-5">
      
                      <h6 class="mb-0">Upload CV</h6>
      
                    </div>
                    <div class="col-md-9 pe-5">
      
                      <input class="form-control form-control-lg" name="material" id="formFileLg" type="file" />
                      <div class="small text-muted mt-2">Upload your CV/Resume or any other relevant file. Max file
                        size 50 MB</div>
      
                    </div>
                  </div>
      
                  <hr class="mx-n3">
      
                  <div class="px-5 py-4">
                    <button name="submit" type="submit" class="btn btn-primary btn-lg">Send application</button>
                  </div>
      
                </div>
              </div>

              <?php
              $link = mysqli_connect("localhost","root","","jobs");
if(isset($_POST['submit']))
{	
	$pdf = $_FILES['material']['name'];
	$pdf_tmp = $_FILES['material']['tmp_name'];
	$path = "file/".$pdf;
	$link = mysqli_connect("localhost","root","","jobs");
	move_uploaded_file($pdf_tmp,$path);
	$csql = "insert into application(name,email,mobile,message,cv) values 
	('".$_POST['fname']."','".$_POST['email']."','".$_POST['phone']."','".$_POST['msg']."','".$pdf."')";
	$result = mysqli_query($link,$csql);
  $sn = mysqli_insert_id($link); 
    if($sn>0){

        echo"<script>alert('Thank You For Applying');window.location='jobsOpenning.php';</script>";
    }
}


?>



        </form>
            </div>
          </div>
        </div>
      </section>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>
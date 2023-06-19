<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Post job offer</title>
    <link rel="icon" type="image/x-icon" href="/IMAGE/favicon.ico">
    
  </head>

  <body>
    <div class="container-fluid">
      <section style="background-color: #0B2447;">
        <div class="container h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-9">
      
              <h1 class="text-white mb-4">Post Jobs Offer</h1>
      <form method="post" enctype='multipart/form-dat' require>
      

              <div class="card" style="border-radius: 15px;">
                <div class="card-body">
      
                  <div class="row align-items-center pt-4 pb-3">
                    <div class="col-md-3 ps-5">
      
                      <h6 class="mb-0">Position</h6>
      
                    </div>
                    <div class="col-md-9 pe-5">
      
                      <input name="pos" type="text" class="form-control form-control-lg" />
      
                    </div>
                  </div>

                  <hr class="mx-n3">
      
                  <div class="row align-items-center py-3">
                    <div class="col-md-3 ps-5">
      
                      <h6 class="mb-0">Cost-To-Company (CTC)</h6>
      
                    </div>
                    <div class="col-md-9 pe-5">
      
                      <input name="ctc" type="number" class="form-control form-control-lg" placeholder="" />
      
                    </div>
                  </div>
      
                  <hr class="mx-n3">
      
                  <div class="row align-items-center py-3">
                    <div class="col-md-3 ps-5">
      
                      <h6 class="mb-0">Location</h6>
      
                    </div>
                    <div class="col-md-9 pe-5">
      
                      <input name="loc" type="text" class="form-control form-control-lg" placeholder="" />
      
                    </div>
                  </div>
      
                  <hr class="mx-n3">
      
                  <div class="row align-items-center py-3" >
                    
                            <div class="col-md-3 ps-5" >

                              <h6 class="mb-0">Working Time</h6>

                            </div>
                            <div class="col-md-9 pe-5">

                              <input name="stime"  type="text" class="form-control form-control-lg" placeholder="" />

                            </div>
                    
                  </div>
      

                  <hr class="mx-n3">
      
                  <div class="row align-items-center py-3">
                    <div class="col-md-3 ps-5">
      
                      <h6 class="mb-0">Eligibility criteria</h6>
      
                    </div>
                    <div class="col-md-9 pe-5">
      
                      <textarea name="eligibility" class="form-control" rows="3" placeholder="Eligibility criteria for this position."></textarea>
      
                    </div>
                  </div>

                  <hr class="mx-n3">
      
                  <div class="row align-items-center py-3">
                    <div class="col-md-3 ps-5">
      
                      <h6 class="mb-0">Job Description</h6>
      
                    </div>
                    <div class="col-md-9 pe-5">
      
                      <textarea name="jd" class="form-control" rows="3" placeholder=" Brief job description."></textarea>
      
                    </div>
                  </div>

                  <hr class="mx-n3">
      
                  <div class="row align-items-center py-3">
                    <div class="col-md-3 ps-5">
      
                      <h6 class="mb-0">Skills Required</h6>
      
                    </div>
                    <div class="col-md-9 pe-5">
      
                      <textarea name="skills" class="form-control" rows="3" placeholder="Skills required for this position.."></textarea>
      
                    </div>
                  </div>
      
                  <hr class="mx-n3">
      
                  <div class="row align-items-center py-3">
                    <div class="col-md-3 ps-5">
      
                      <h6 class="mb-0">Upload Brochure</h6>
      
                    </div>
                    <div class="col-md-9 pe-5">
      
                      <input name="material" class="form-control form-control-lg" id="formFileLg" type="file" />
                      <div class="small text-muted mt-2">Upload your brochure or any other relevant file. Max file
                        size 50 MB</div>
      
                    </div>
                  </div>

                  
      
                  <hr class="mx-n3">
      
                  <div class="px-5 py-4">
                    <button name="submit" type="submit" class="btn btn-primary btn-lg">Post Offer</button>
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
	$csql = "insert into job(position,ctc,location,stime,eligibility,jd,skill,file) values 
	('".$_POST['pos']."','".$_POST['ctc']."','".$_POST['loc']."','".$_POST['stime']."','".$_POST['eligibility']."','".$_POST['jd']."','".$_POST['skills']."','".$pdf."')";
	$result = mysqli_query($link,$csql);
  $sn = mysqli_insert_id($link); 
    if($sn>0){

        echo"<script>alert('Job Posted Sucessfully!!!');window.location='jobList.php';</script>";
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
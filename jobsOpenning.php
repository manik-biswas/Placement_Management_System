<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Jobs Openning</title>

  <!-- Bootstrap  -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="/IMAGE/favicon.ico">
  <!-- Bootstrap icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

</head>

<body>
  <div class="container-fluid">

  <?php

$link = mysqli_connect("localhost", "root", "", "jobs");
if(!empty($_GET['search']))
{
    $qry = "select * from job where (position like '%".$_GET['search']."%' || location like '%".$_GET['search']."%' || stime like '%".$_GET['search']."%') order by id desc";
}else{    
    $qry = "select * from job order by id desc";
}
$conn = mysqli_query($link,$qry);
//$details = mysqli_fetch_assoc($conn);


?>

    <!-- heading -->
    <div class="row pt-3 pb-3 bg-info-subtle">
      <div class="col-md text-center">
        <h2>Jobs Opennings</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, ducimus!</p>
      </div>
    </div>
    <hr>
    <!-- search bar -->
    <div class="row justify-content-evenly mb-5 mt-4">
      <div class="col-md-5" style="margin-right: 800px;">
        <h5 class="text-start "><u><a href="youAre.php" class="text-decoration-none"><span
          class="text-info h1">KU</span></a></u>Placements</h5>
      </div>

<form method="get">

      <div class="col-md-5 pt-2">
        <!-- <label for="search by" class="form-label h6">Search By:</label> -->

        <input style="margin-left: 800px;" type="text" name="search"  value="<?=(isset($_GET['search']))?$_GET['search']:''?>" class="form-select" aria-label="Default select example" placeholder="Search by job type, Position and location">
      </div>
</form>
    </div>

    <!-- job opening try-1 
    <div class="row shadow p-3 mx-3 mb-5 bg-body-tertiary rounded justify-content-evenly ">
      <div class="col-md-1 text-danger h4"><i class="bi bi-code-square"></i></div>
      <div class="col-md-3">
        <p>Senior Graphic Designer</p>
      </div>
      <div class="col-md-2">
        <p>Full Time</p>
      </div>
      <div class="col-md-2">
        <p>Noida</p>
      </div>
      <div class="col-md-1"><a class="btn btn-primary " href="/HTML/jobs.html" role="button">Apply</a></div>
    </div>  -->
     
    
    <!-- job opening 1 -->
    <?php
// $link = mysqli_connect("localhost", "root", "", "jobs");
   
// $qry = "select * from job order by id desc";

// $conn = mysqli_query($link,$qry);
//$details = mysqli_fetch_assoc($conn);
 while($details = mysqli_fetch_assoc($conn)) { 
?>

    <div class="row shadow p-2 mx-3 mb-5 bg-body-tertiary rounded justify-content-evenly ">
      <div class="col-md-1 text-danger h2 pt-2"><i class="bi bi-code-square"></i></div>
      <div class="col-md-2 pt-2">
        <p><b><?php echo $details['position'] ?></b></p>
      </div>
      <div class="col-md-1 pt-2">
        <p><b><?php echo $details['stime'] ?></b></p>
      </div>
      <div class="col-md-1 pt-2">
        <p><b><?php echo $details['location'] ?></b></p>
      </div> 
      <!-- Eligibility criteria -->
      <div class="col-md-4 pt-2">
        <p>
          <button class="btn btn-success" style="width: 80%;" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample1">
            Eligibility criteria
          </button>
        </p>
        <div class="collapse" id="collapseExample1">
          <div class="card card-body">
          <?php echo $details['eligibility'] ?>
          </div>
        </div>
      </div>
      <!-- apply button  -->
      <div class="col-md-1 pt-2"><a class="btn btn-primary" style="width: 100%;" href="jobs.php"
          role="button">Apply</a></div>
    </div>
<?php } ?>


    <!-- container-end  -->
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
</body>

</html>
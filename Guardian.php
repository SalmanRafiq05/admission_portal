<?php include('connect.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guardian Info</title>
    <style>
        input{
            width: 450px;
            height: 30px;
        }
    </style>
    <link rel="icon" href=
"logo.jpeg"
          type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg " style="background-color:green;">
        <div class="container-fluid">
         <h4 style="color: white;font-style:oblique"><img src="logo.jpeg" alt="" height="40px">&nbsp;UAF-Online Admission Portal</h4>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup" >
            <div class="navbar-nav">
              <a class="nav-link " aria-current="page" href="home.html"style="margin-left: 45px;font-size:larger;font-style:oblique;">Home</a>
              <a class="nav-link active" href="profile.php" style="margin-left: 50px;font-size:larger;font-style:oblique;">Profile</a>
              <a class="nav-link" href="offered.html" style="margin-left: 50px; font-size:larger;font-style:oblique;">Offered Degrees</a>
              <a class="nav-link" href="gallery.html" style="margin-left: 50px;font-size:larger;font-style:oblique;">Gallery</a>
              
            </div>
          </div>
          
        </div>
      </nav>
    <br>
    <div style="border: 2px solid green;width:780px;margin-left:270px;background-color:#907c7c20">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item ">Personal Info</a></li>
              <li class="breadcrumb-item active " ><a href="Guardian.php">Guardian Info</a></li>
              <li class="breadcrumb-item ">Mailing Info</li>
              <li class="breadcrumb-item " >Secondary School Info</li>
              <li class="breadcrumb-item ">Higher School Info</li>
              
            </ol>
          </nav>
    </div>
    <br>
    
    <div style="border: 1px solid green;width:1300px;margin-left:30px;height:250px;">
        <div style="float: left;margin-left:30px;">
            <br>
            <form action="" method="POST">
              <h6>Guardian Name:</h6> 
              <input name="name" type="text"  id="" >
              <br>
    <h6>Guardian Occupation:</h6> 
    <input name="occupation" type="text"  id="" >
    <br>
    <h6>Guardian CNIC:</h6>
    <input name="cnic" type="number"  id="" >
    
    <br>
        </div>
        <div style="float:right;margin-right:90px;">
            <br>
            <h6>Guardian Relation:</h6>
            <input name="relation" type="text"  id="">
            <h6>Annual Income:</h6>
            <input name="income" type="text"  id="">
            <h6>Guardian Cell No:</h6>
            <input name="number" type="number"  id="">
       </div>
    
    </div>
    <br>
    <div style="border: 1px solid green;width:1300px;margin-left:30px;height:100px;">
        <br>
        <a href="profile.php" style="background-color:orange;border:1px solid black;width:100px;height:50px;margin-left:20px;">>>Previous</a>
         <button name="save" type="submit"  style="background-color:green;border:1px solid black;width:70px;height:30px;margin-left:1000px;">Save</button></form>
         <a href="Mailing.php" style="background-color:green;border:1px solid black;width:100px;height:50px;margin-left:1200px;">Next<<</a>
         
    </div>
  <br>
    <footer style="background-color: green;position:sticky;color:white;font-style:oblique;">
     
        <div>
       <h3> UAF-Admission Portal</h3>
      <ul>
       <li>Admission Procedure</li>
       <li>How to Apply?</li>
       <li>Undergraduate Session 2023-2024</li>
      </ul>
      <p>University Of Agriculture,Faisalabad &copy 2023</p>
      </div>     
      
   
     </footer>
     <?php
     if(isset($_POST['save'])) {
      $guardian_name =$_POST['name'];
      $guardian_occupation =$_POST['occupation'];
      $guardian_cnic =$_POST['cnic'];
      $guardian_relation =$_POST['relation'];
      $guardian_income =$_POST['income'];
      $guardian_number =$_POST['number'];
      $query="INSERT INTO guardian(guardian_name,guardian_occupation,guardian_cnic,guardian_relation,guardian_income,guardian_number) VALUES('$guardian_name','$guardian_occupation','$guardian_cnic','$guardian_relation','$guardian_income','$guardian_number')";
     
      $ins=mysqli_query($con ,$query) ;
      
     }
     
     ?>
</body>
</html>
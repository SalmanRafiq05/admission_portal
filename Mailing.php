<?php include('connect.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mailing Info</title>
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
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
          integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
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
              <li class="breadcrumb-item">Personal Info</a></li>
              <li class="breadcrumb-item " >Guardian Info</li>
              <li class="breadcrumb-item active "><a href="Mailing.php">Mailing Info</a></li>
              <li class="breadcrumb-item " >Secondary School Info</li>
              <li class="breadcrumb-item ">Higher School Info</li>
              
            </ol>
          </nav>
    </div>
    <br>
    <div style="border: 1px solid green;width:900px;margin-left:30px;height:250px;margin-left:200px;">
        
            
    <h4 style="background-color: green;color:white;font-style:oblique;">Current Mailing Info</h4>
    <br>
    <form action="" method="POST">
    <h6 style="margin-left:30px;">Current Mailing Address:</h6> 
    <textarea  style="margin-left:30px;" name="caddress" id="" cols="100" rows="2"></textarea>
    <br>
    <div>
        <div style="float: left;">
            <h6 style="margin-left:70px;"> Current Union Council No:</h6>
            <input type="number" name="cno" id="" style="margin-left:70px; width:200px;">
        </div>
        <div style="float: right;">
            <h6 style="margin-right:250px;"> Current Police Station:</h6>
            <input type="text" name="cpolice" id="" style="margin-left:30px;width:200px;">
        </div>
    </div>
        </div>
        <br>
        <div style="border: 1px solid green;width:900px;margin-left:30px;height:250px;margin-left:200px;">
         <h4 style="background-color: green;color:white;font-style:oblique;">Permanent Mailing Info</h4>
            <br>
        <h6 style="margin-left:30px;">Permanent Mailing Address:</h6> 
    <textarea  style="margin-left:30px;" name="paddress" id="" cols="100" rows="2"></textarea>
    <br>
    <div>
        <div style="float: left;">
            <h6 style="margin-left:70px;"> Permanent Union Council No:</h6>
            <input type="number" name="pno" id="" style="margin-left:70px; width:200px;">
        </div>
        <div style="float: right;">
            <h6 style="margin-right:250px;"> Permanent Police Station:</h6>
            <input type="text" name="ppolice" id="" style="margin-left:30px;width:200px;">
        </div>
    </div>
    
    <br>
        </div>
        <br>
        
    <div style="border: 1px solid green;width:1300px;margin-left:30px;height:100px;">
        <a href="Guardian.php" style="background-color:orange;border:1px solid black;width:100px;height:50px;margin-left:20px;">>>Previous</a>
         <button name="save" type="submit"  style="background-color:green;border:1px solid black;width:70px;height:30px;margin-left:1000px;margin-top:10px">Save</button>
         </form>
         <a href="secondry.php" style="background-color:green;border:1px solid black;width:100px;height:50px;margin-left:1200px;">Next<<</a>
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
      $current_address =$_POST['caddress'];
      $current_no =$_POST['cno'];
      $current_police =$_POST['cpolice'];
      $permanent_address =$_POST['paddress'];
      $permanent_no=$_POST['pno'];
      $permanent_police =$_POST['ppolice'];
      $query="INSERT INTO mailing( current_address,current_no,current_police,permanent_address,permanent_no,permanent_police) VALUES('$current_address','$current_no','$current_police','$permanent_address','$permanent_no','$permanent_police')";
     
      $ins=mysqli_query($con ,$query) ;
      
     }
     
     ?>

</body>
</html>
<?php include('connect.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
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
              <a class="nav-link active" href="profile.html" style="margin-left: 50px;font-size:larger;font-style:oblique;">Profile</a>
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
              <li class="breadcrumb-item active"><a href="profile.php">Personal Info</a></li>
              <li class="breadcrumb-item " >Guardian Info</li>
              <li class="breadcrumb-item ">Mailing Info</li>
              <li class="breadcrumb-item " >Secondary School Info</li>
              <li class="breadcrumb-item ">Higher School Info</li>
              
            </ol>
          </nav>
    </div>
    <br>
    <div style="border: 1px solid green;width:1300px;margin-left:30px;height:450px;">
        <div style="float: left;margin-left:30px;">
            <br>
            <form action="" method="POST">
    <h6>Full Name:</h6> 
    <input type="text" name="name" id="" >
    <br>
    <h6>Date of Birth</h6>
    <input type="date" name="dob" id="">
    <br>
    <h6>Residential Category</h6>
    <select name="residence" id="" style="width: 450px;height:30px;">
        <option value="">----</option>
        <option value="Urban">Urban</option>
        <option value="Rural">Rural</option>
    </select>
    <h6>Nationality</h6>
    <select name="nationality" id="" style="width: 450px;height:30px;">
        <option value="">----</option>
        <option value="pakistani">Pakistani</option>
        <option value="foreigner">Foreigner</option>
    </select>
    <br>
    <h6>Phone Number:</h6> 
    <input type="number" name="phone" id="" >
    <h6>Hafiz</h6>
    <select name="hafiz" id="" style="width: 450px;height:30px;">
        <option value="">----</option>
        <option value="yes">Yes</option>
        <option value="no">No</option>
    </select>

        </div>
        <div style="float:right;margin-right:90px;">
            <br>
            <h6>Father Name:</h6>
            <input type="text" name="father" id="">
            <h6>Gender</h6>
    <select name="gender" id="" style="width: 450px;height:30px;">
        <option value="">----</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
    </select>
    <h6>Religion</h6>
    <select name="religion" id="" style="width: 450px;height:30px;">
        <option value="">----</option>
        <option value="muslim">Muslim</option>
        <option value="christian">Christian</option>
    </select>
    <h6>Blood Group</h6>
    <select name="blood" id="" style="width: 450px;height:30px;">
        <option value="">Unknown</option>
        <option value="">O+</option>
        <option value="">O-</option>
        <option value="">A-</option>
        <option value="">A+</option>
        <option value="">B-</option>
        <option value="">B+</option>
        <option value="">AB-</option>
        <option value="">AB+</option>
    </select>
    <h6>Cell No:</h6>
    <input type="number" name="cell" id="">
    <h6>Passport No:</h6>
    <input type="number" name="passport" id="" placeholder="Passport Number(Optional)">

       </div>
    
    </div>
    <br>
    <div style="border: 1px solid green;width:1300px;margin-left:30px;height:100px;">
        <br>
         <button type="submit" name="save"  style="background-color:green;border:1px solid black;width:70px;height:30px;margin-left:1000px;">Save</button> </form>
         <a href="Guardian.php" style="background-color:green;border:1px solid black;width:100px;height:50px;margin-left:1200px;">Next<<</a>
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
      $name =$_POST['name'];
      $dob =$_POST['dob'];
      $residence =$_POST['residence'];
      $nationality =$_POST['nationality'];
      $phone =$_POST['phone'];
      $hafiz =$_POST['hafiz'];
      $father=$_POST['father'];
      $gender =$_POST['gender'];
      $religion =$_POST['religion'];
      $blood =$_POST['blood'];
      $cell =$_POST['cell'];
      $passport =$_POST['passport'];
      $query="INSERT INTO profile(name,dob,residence,nationality,phone,hafiz,father,gender,religion,blood,cell,passport) VALUES('$name','$dob','$residence','$nationality','$phone','$hafiz','$father','$gender','$religion','$blood','$cell','$passport')";
     
      $ins=mysqli_query($con ,$query) ;
      
     }
     
     ?>
</body>
</html>
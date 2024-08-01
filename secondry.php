<?php include('connect.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secondary Info</title>
    <link rel="stylesheet" href="./style2.css">
    <style>
      *{
        margin: 0px;
        padding: 0px;
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
              <li class="breadcrumb-item  ">Mailing Info</li>
              <li class="breadcrumb-item active " ><a href="secondary.php">Secondary School Info</a></li>
              <li class="breadcrumb-item ">Higher School Info</li>
              
            </ol>
          </nav>
    </div>
    <br>
    <fieldset>
      <div style="border: 1px solid green; width:1300px;height:300px;">
        <br>
      <div class="first" style="text-align: center;">
          <form action="" method="POST">
              <label for="School Name"><b>School Name:</b></label>
              <input type="text" id="School Name" name="name" required style="width: 400px;">
              <label for="School Address"><b>School Address:</b></label>
              <input type="School Address" id="Saddress" name="address" required style="width: 400px;">
          
      </div>
      <br>
      <div class="second" style="text-align: center;">
          
              <label for="Tehsil"><b>Tehsil:</b></label>
              <input type="text" id="Tehsil" name="tehsil" required style="width: 250px;">
              <label for="District"><b>&nbsp;&nbsp;&nbsp;&nbsp;District:</b></label>
              <input type="text" id="District" name="district" required style="width: 250px;">
              <label for="Village/Town"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Village/Town:</b></label>
              <input type="text" id="Village/Town" name="town" required style="width: 250px;">
         
      </div>
      <br>
      <div class="third" style="text-align: center;">
          <form>
              <label for="Board"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Board:</b></label>
              <input type="text" id="Board" name="board" required style="width: 400px;">
              <label for="Certificate"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Certificate:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
              <input type="text" id="Certificate" name="certificate" required style="width: 400px;">
          
      </div>
      <br>
      <div class="fourth" style="text-align: center;">

              <label for="Matric Subjects"><b>Matric Subjects:</b></label>
              <input type="text" id="Matric Subjects" name="subjects" required style="width: 250px;">
              <label for="Matric Year"><b> Matric Year:</b></label>
              <input type="text" id="Matric Year" name="Year" required style="width: 250px;">
              <label for="Matric Roll NO."><b> Roll NO.:</b></label>
              <input type="text" id="Matric Roll NO." name="rolno" required style="width: 250px;">
          
      </div>
      <br>
      <div class="five" style="text-align: center;">
          
              <label for="Matric Total Marks"><b> Total Marks:</b></label>
              <input type="text" id="Matric Total Marks" name="tmarks" required style="width: 250px;">
              <label for="Matric Obtain Marks"><b> Obtain Marks:</b></label>
              <input type="text" id="Matric Obtain Marks" name="omarks" required style="width: 250px;">
              <label for="Matric Grade"><b>Matric Grade:</b></label>
              <input type="text" id="Matric Grade" name="grade" required style="width: 250px;">
            
      </div>
  </fieldset>
</div>
  <br>
  <div style="border: 1px solid green;width:1300px;margin-left:30px;height:100px;">
    <a href="Mailing.php" style="background-color:orange;border:1px solid black;width:100px;height:50px;margin-left:20px;">>>Previous</a>
     <button name="save" type="submit"  style="background-color:green;border:1px solid black;width:70px;height:30px;margin-left:1000px;margin-top:10px">Save</button>
     </form>
     <a href="higher.php" style="background-color:green;border:1px solid black;width:100px;height:50px;margin-left:1200px;">Next<<</a>
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
      $school_name =$_POST['name'];
      $school_address =$_POST['address'];
      $tehsil =$_POST['tehsil'];
      $district =$_POST['district'];
      $town =$_POST['town'];
      $board =$_POST['board'];
      $certificate=$_POST['certificate'];
      $subjects =$_POST['subjects'];
      $year =$_POST['Year'];
      $roll_no =$_POST['rolno'];
      $t_marks =$_POST['tmarks'];
      $o_marks =$_POST['omarks'];
      $grade =$_POST['grade'];
      $query="INSERT INTO secondry(school_name,school_address,tehsil,district,town,board,certificate,subjects,year,roll_no,t_marks,o_marks,grade) VALUES('$school_name','$school_address','$tehsil','$district','$town','$board','$certificate','$subjects','$year','$roll_no','$t_marks','$o_marks','$grade')";
     
      $ins=mysqli_query($con ,$query) ;
      
     }
     
     ?>
</body>
</html>
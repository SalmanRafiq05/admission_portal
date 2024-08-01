<?php include('connect.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Registration</title>
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
          
        </div>
      </nav>
      <br>
      <br>
      <br>
    <div style="display: flex;">
        <div style="width: 60%; height:550px; border:1px solid green;margin-left:20px">
          <h3 style="background-color: green;color:white;">&nbsp;Register with UAF</h3> <br>
          <form action="" method="POST">
          <h6 style="margin-left: 99px;margin-top:50px"> &nbsp;Email Address:&nbsp; <input type="email" name="email" id="" placeholder="Enter your Email Address" style="width: 540px;" required></h6> <br>
          <h6 style="margin-left: 40px;"> &nbsp;Confirm Email Address:&nbsp; <input type="email" name="cemail" id="" placeholder="Confirm your Email Address" style="width: 540px;" required></h6> <br>
          <h6 style="margin-left: 170px;">&nbsp;CNIC:&nbsp; <input type="number" name="cnic" id="" placeholder="Enter your CNIC" style="width: 540px;" required></h6> <br>
          <h6 style="margin-left: 140px;">&nbsp;Password:&nbsp; <input type="password" name="password" id="" placeholder="Enter strong password" style="width: 540px;" required></h6> <br>
          <h6 style="margin-left: 75px;">&nbsp;Confirm Password:&nbsp; <input type="password" name="cpassword" id="" placeholder="Confirm Password" style="width: 540px;" required></h6> <br>
          <h6 style="margin-left: 120px;">&nbsp;Verify Code:&nbsp; <input type="number" name="code" id="" placeholder="Verify Code" style="width: 540px;" required></h6>
           <br>
          <button name="register" type="submit" style="background-color: green;width:120px;margin-left:600px;border-radius:4px;color:white;">Register</button>
          </form>
        </div>
        <div style="width: 33%; height:550px; border:1px solid green;margin-left:50px">
          <h3 style="background-color: green;color:white;">&nbsp;Instructions.</h3> <br>
          <ul>
            <li>Register your own email address, do not use anyone <br> else email address because all the correspondence will <br> be share with you by this email address.</li>
            <li>Use your own CNIC or B-Form Number, do not use <br> anyone else CNIC or B-Form Number.</li>
            <li>Once CNIC or B-Form Number Register with UAF you <br> cannot change it.</li>
            <li>Type your own password and remember it.</li>
            <li>This account will be used throughout the whole <br> admission process, so please remember your <br>credentials.</li>
            <li>After register, a confirmation email will be send to given <br> email address with activation link. You have to confirm  <br>by logging into your account to avail the UAF Admission <br> services.</li>
            <li>If you do not confirm E-Mail within two hours, you have <br> to register again.</li>
          </ul>
         <p align="center">Best of Luck <br>
          Convener Admission Committee</p>
        </div>
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
       if(isset($_POST['register'])) {
        $email =$_POST['email'];
        $cemail =$_POST['cemail'];
        $cnic =$_POST['cnic'];
        $password =$_POST['password'];
        $cpassword =$_POST['cpassword'];
        $code =$_POST['code'];
        
        $query = "INSERT INTO registration(email,confirm_email,cnic,password,confirm_password,verify_code) VALUES('$email','$cemail','$cnic','$password','$cpassword','$code')";

         $ins= mysqli_query($con,$query);
         
       }
       ?>
</body>
</html>
<?php include('connect.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> UAF-Online Admission portal</title>
    <style>
      #one{
        width: 500px;
        border-radius: 5px;
        border:1px dashed black;
        height: 35px;
      }
      #two{
        width: 500px;
        border-radius: 5px;
        border:1px dashed black;
        height: 35px;
      }
    </style>
    <link rel="icon" href="logo.jpeg" type="image/x-icon">
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
      <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel" >
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="image1.jpg" class="d-block w-100" alt="..." height="500px">
          </div>
          <div class="carousel-item">
            <img src="clock.jpg" class="d-block w-100" alt="..." height="500px">
          </div>
          <div class="carousel-item">
            <img src="image2.jpg" class="d-block w-100" alt="..." height="500px">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <br>
      
      <p style="color: green; font-size:x-large; padding-left:25px;"> Welcome to <p>
        <h3 style="padding-left:25px;"><b>University Of Agriculture,Faisalabad </b></h3> 
        <p style="color: green;padding-left:25px;font-size:x-large;">Online Admission Portal for Admission to first degree program
      </p> 
      <div style=" height:350px; width:800px; margin-left:250px;  border-radius:100px;padding:50px;">
      <?php
    if (isset($_POST['save'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = "INSERT INTO first( email, password) VALUES( '$email', '$password')";

        $ins = mysqli_query($con, $query);
        if ($ins) {
          header("Location: home.html");
        }
      
        
    }
    ?>
      <form action="" method="POST">
       <h2> <img src="username.png" alt="">&nbsp;Email:</h2>
       <input type="email" name="email" id="one" placeholder="Enter Email here" required>
      <h3> <img src="lock.png" alt="">&nbsp;Password:</h3> 
      <input type="password" name="password" id="two" placeholder="Choose Strong Password" required>   
      <br>
      <br>
      <button type="submit" name="submit" style="background-color: palevioletred;margin-top:5px;height:45px;margin-left:30px"><a href="new.php">New Registration</button></a>
      <button type="submit" name="save" value="save" style="background-color: green;margin-top:5px;height:45px;color:black;margin-left:200px;width:100px;text-decoration:none;">LOG IN</button>
      </form>
      <br>
      <h4 style="margin-left:10px ;color:green;font-style:oblique"><a href="forgot.html">Forgot Password?</h4></a>
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
    
    
   
</body>
</html>
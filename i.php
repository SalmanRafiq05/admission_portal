

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
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
         if ($ins){
           echo"saved successfully";
        }
       }
       ?>



    
</body>
</html>
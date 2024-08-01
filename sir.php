
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <form action="" method="POST">
        <input type="email" name="email" placeholder="Enter Email">
        <input type="password" name="password" placeholder="Enter Password">
        <input type="submit" name="save" value="save record">
    </form>

    <?php
    if (isset($_POST['save'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = "INSERT INTO first( email, password) VALUES( '$email', '$password')";

        $ins = mysqli_query($con, $query);
        if ($ins) {
            echo "Saved Successfully";
        }
    }




    ?>
</body>
</html>
<?php
include 'conn.php';
if (isset($_POST['register'])) {
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $q = " select * from logintable where email='$email' && password='$password' ";
    $res = mysqli_query($conn, $q); // for firing query
    if (mysqli_num_rows($res)) {
        // echo "duplicate";
        header('location:registration.php');
    } else {
        $q2 = " INSERT INTO logintable(email, password) VALUES ('$email','$password') ";
        mysqli_query($conn, $q2);
        header('location:login.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="col-lg-6 m-auto">
        <form method="post">
            <div class="card">
                <div class="card-header bg-dark">
                    <h1 class="text-white text-center">Register</h1>
                </div>
                <label> Email : </label>
                <input type="email" name="email" class="form-control" required> <br>
                <label> Password : </label>
                <input type="password" name="pass" class="form-control" required> <br>
                <button class="btn btn-success" type="submit" name="register">Register</button>
    
            </div>
        </form>
    </div>

</body>

</html>
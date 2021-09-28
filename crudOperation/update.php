<?php
include 'conn.php';
if (isset($_POST['done'])) { // to avoid auto reset form or submit
    $username = $_POST['username'];
    $password = $_POST['pass'];
    $id = $_GET['id'];
    $q = " UPDATE `crudtable` SET `id`=$id, `username`='$username', `password`='$password' WHERE id=$id ";
    $query = mysqli_query($conn, $q);

    header('location:display.php');
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
                    <h1 class="text-white text-center">Update Operation</h1>
                </div>
                <label> Username : </label>
                <input type="text" name="username" class="form-control"> <br>
                <label> Password : </label>
                <input type="password" name="pass" class="form-control"> <br>
                <button class="btn btn-success" type="submit" name="done">Submit</button>
            </div>
        </form>
    </div>

</body>

</html>
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
        <form method="post" action='validation.php'>
            <div class="card">
                <div class="card-header bg-dark">
                    <h1 class="text-white text-center">Login</h1>
                </div>
                <label> Email : </label>
                <input type="email" name="email" class="form-control" required> <br>
                <label> Password : </label>
                <input type="password" name="pass" class="form-control" required> <br>
                <button class="btn btn-success" type="submit" name="login">Login</button>
                <a href="./registration.php" class="btn btn-success text-white">Register</a>

            </div>
        </form>
    </div>

</body>

</html>
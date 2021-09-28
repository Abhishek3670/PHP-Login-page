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
    <div class="container">
        <div class="col-lg-12">
            <h1 class="text-earning text-center">Display Table Data</h1>
            <table class="table table-striped table-hover table-bordered">
                <tr class="bg-dark text-white text-center">
                    <th>Id</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Delete</th>
                    <th>Update</th>
                </tr>
                <?php
                include 'conn.php';
                $q = "select * from crudtable";
                $query = mysqli_query($conn, $q);
                while ($res = mysqli_fetch_array($query)) {
                ?>
                    <tr class="text-center">
                        <td>
                            <?php echo $res['id']; ?>
                        </td>
                        <td>
                            <?php echo $res['username']; ?>
                        </td>
                        <td>
                            <?php echo $res['password']; ?>
                        </td>
                        <td>
                            <a href="delete.php?id=<?php echo $res['id']; ?>" class="btn btn-danger text-white">Delete</a>
                        </td>
                        <td>
                            <a href="update.php?id=<?php echo $res['id']; ?>" class=" btn btn-success  text-white">Update</a>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>

</body>

</html>
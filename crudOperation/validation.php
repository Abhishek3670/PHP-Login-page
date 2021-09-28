
<?php
include 'conn.php';
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $q = " select * from logintable where email='$email' && password='$password' ";
    $res = mysqli_query($conn, $q); // for firing query
    if (mysqli_num_rows($res)) {
        header('location:display.php');
    } else {
        header('location:registration.php');
    }
}

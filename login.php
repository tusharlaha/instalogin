<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "run";

$conn = mysqli_connect($server, $username, $password, $dbname);

if (isset($_POST["login-btn"])) {
    if (!empty($_POST['username']) && !empty($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];



        $query = "insert into world(username,password) values( '$username', '$password')";
        $run = mysqli_query($conn,$query) ;

        if ($run) {
            echo "form submitted successfully";
        } else {
            echo "form not submitted";
        }
    } else {
        echo "all fields are required";
    }
}
?>
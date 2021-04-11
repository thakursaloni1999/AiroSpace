<?php

$email=$_POST["email"];
//$email="chottijaya@gmail.com";
$con = new mysqli("localhost","root","","login");

if ($con -> connect_error){
    die("Failed to Connect :".$con->connect_error);
} else {
    $sql = "INSERT INTO notification (email) VALUES ( '".$email."' )";

    if (mysqli_query($con,$sql) === TRUE) {
        header("location:index.html");
    } else {
    echo "Error: " . $sql . "<br>" . $con->error;
    }

$con->close();
}

?>

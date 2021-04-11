
<?php

$name=$_POST["name"];
$email=$_POST["email"];
$query=$_POST["query"];

$con = new mysqli("localhost","root","","login");

if ($con -> connect_error){
    die("Failed to Connect :".$con->connect_error);
} else {
    $sql = "INSERT INTO passenger (id , name , email , query) VALUES (Null, '".$name."', '".$email."', '".$query."')";

    if (mysqli_query($con,$sql) === TRUE) {
        header("location:index.html");
    } else {
    echo "Error: " . $sql . "<br>" . $con->error;
    }

$con->close();
}

?>

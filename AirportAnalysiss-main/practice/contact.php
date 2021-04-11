
<?php

$name=$_POST["name"];
$email=$_POST["email"];
$comment=$_POST["comment"];

$con = new mysqli("localhost","root","","login");

if ($con -> connect_error){
    die("Failed to Connect :".$con->connect_error);
} else {
    $sql = "INSERT INTO contact (id , name , email , comment) VALUES (Null,'". $name."', '".$email."', '".$comment."')";

    if (mysqli_query($con,$sql) === TRUE) {
        header("location:admin1.html");
    } else {
    echo "Error: " . $sql . "<br>" . $con->error;
    }

$con->close();
}

?>





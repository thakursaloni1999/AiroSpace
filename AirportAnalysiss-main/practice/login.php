<?php 

$email=$_POST["emailid"];
$pwd=$_POST["pwd"];

$con = new mysqli("localhost","root","","login");

if ($con -> connect_error){
    die("Failed to Connect :".$con->connect_error);
} else {
    $stmt = $con -> prepare("select * from login_id where email= ?");
    $stmt -> bind_param("s",$email);
    $stmt->execute();
    $stmt_result =$stmt->get_result();
    if ($stmt_result -> num_rows>0){
        $data = $stmt_result->fetch_assoc(); 
        if ($data['password']===$pwd){
            //echo "Successful";
            header("location:admin1.html");
        }else{
            echo "<h2>Invalid Email or password</h2>";
        }

    } else{
        echo "<h2>Invalid Email or password</h2>";
    }
}

?>
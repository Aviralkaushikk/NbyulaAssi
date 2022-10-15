<?php
$Email = $_POST['Email'];
$Password = $_POST['Password'];

$con = new mysqli("localhost","root","","nbyula");
if($con->connect_error){
    die("Connection  Failed : ".$conn->connect_error);
}else{
    $stmt = $con->prepare("select * from registration where Email = ?");
        $stmt->bind_param("s",$Email);
          $stmt->execute();
          $stmt_result = $stmt->get_result();
          if($stmt_result->num_rows > 0){
            $data = $stmt_result->fetch_assoc();
            if($data['Password'] === $Password){
                echo "<h2> Login Successfully</h2>";
                
header("location:App3.php");
            } else {
                echo "<h2>Invalid Email or Password</h2>";
            }
        } else{
            echo "<h2>Invalid Email or Password</h2>";
        }
            }
            
          
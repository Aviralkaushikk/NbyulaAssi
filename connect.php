<?php
$Name = $_POST['Name'];
$Email = $_POST['Email'];
$Password = $_POST['Password'];
$Contact = $_POST['Contact'];
$City = $_POST['City'];
$Address = $_POST['Address'];

$conn = new mysqli('localhost','root','','nbyula');
if($conn->connect_error){
    die('Connection  Failed :'.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into registration(name,Email,Password,Contact,City,Address)
        values(?,?,?,?,?,?)");
        $stmt->bind_param("sssiss" , $Name,$Email,$Password,$Contact,$City,$Address);
          $stmt->execute();
          echo "Registration Successfully";
          $stmt->close();
          $conn ->close();
}
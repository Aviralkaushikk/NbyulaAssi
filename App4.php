<?php
$Name = $_POST['Name'];
$Company = $_POST['Company'];
$Role= $_POST['Role'];
$Contact = $_POST['Contact'];
$Email = $_POST['Email'];

$conn = new mysqli('localhost','root','','nbyula');
if($conn->connect_error){
    die('Connection  Failed :'.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into registration2(Name,Company,Role,Contact,Email)
        values(?,?,?,?,?)");
        $stmt->bind_param("sssis" , $Name,$Company,$Role,$Contact,$Email);
          $stmt->execute();
          echo "Registration Successfully";
          $stmt->close();
          $conn ->close();
}
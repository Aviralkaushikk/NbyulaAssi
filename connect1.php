<?php
$Title = $_POST['Title'];
$Description = $_POST['Description'];
$Location = $_POST['Location'];
$Contact = $_POST['Contact'];
$Deadline= $_POST['Deadline'];
$Email = $_POST['Email'];

$conn = new mysqli('localhost','root','','nbyula');
if($conn->connect_error){
    die('Connection  Failed :'.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into registration1(Title,Description,Location,Contact,Deadline,Email)
        values(?,?,?,?,?,?)");
        $stmt->bind_param("sssiis" , $Title,$Description,$Location,$Contact,$Deadline,$Email);
          $stmt->execute();
          echo "Registration Successfully";
          $stmt->close();
          $conn ->close();
}
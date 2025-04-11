<?php
    $email = $_POST['email'];

    //database connection
    $conn = new mysqli('localhost','root','','test');
    if($conn->connect_error){
       die('connection failed : '.$conn->connect_error);
    }else{
       $stmt = $conn->prepare("insert into newsletter(email)
       values(?)");
       $stmt->bind_param("s",$email);
       $stmt->execute();
       $stmt->close();
       $conn->close();
    }

   // PHP program to pop an alert
   // message box on the screen

   // Display the alert box 
   echo '<script>alert("Email Send Successfully.")</script>';
?>
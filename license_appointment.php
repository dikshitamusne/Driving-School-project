<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $vehicletype = $_POST['vehicletype'];
    $message = $_POST['message'];

    //database connection
     $conn = new mysqli('localhost','root','','test');
     if($conn->connect_error){
        die('connection failed : '.$conn->connect_error);
     }else{
        $stmt = $conn->prepare("insert into license_appointment(name, email, phone, vehicletype, message)
        values(?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss",$name, $email, $phone, $vehicletype, $message);
        $stmt->execute();
        $stmt->close();
        $conn->close();
     }

   // PHP program to pop an alert
   // message box on the screen

   // Display the alert box 
   echo '<script>alert("Appointment Confirmed")</script>';
?>
<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];

    //database connection
    $conn = new mysqli('localhost','root','','test');
    if($conn->connect_error){
       die('connection failed : '.$conn->connect_error);
    }else{
       $stmt = $conn->prepare("insert into getappointment(name, email, phone, subject)
       values(?, ?, ?, ?)");
       $stmt->bind_param("ssss",$name, $email, $phone, $subject);
       $stmt->execute();
       $stmt->close();
       $conn->close();
    }

    // PHP program to pop an alert
    // message box on the screen

    // Display the alert box 
    echo '<script>alert("Appointment Confirmed.")</script>';
?>
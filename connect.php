<?php
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];

    //Database Connection

    $conn = new mysqli('localhost', 'root', '', 'test2');
    if($conn->connect_error){
        die('Connection Failed :' .$conn->connect_error);
    }
    else{
        $stmt = $conn->prepare("Insert into registration(fname, lname, email, password, phone) values(?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssi", $fname, $lname, $email, $password, $phone);
        $stmt->execute();
        echo "Registration Successfully......";
        $stmt->close();
        $conn->close();
    }
?>
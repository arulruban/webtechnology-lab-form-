<?php
    require_once "connection.php";

    // Get book details from the form
    $s_name = $_POST['s_name'];
    $DOB = $_POST['DOB'];
    $reg_id = $_POST['reg_id'];
    $phoneno = $_POST['phoneno'];
    $email = $_POST['email'];
    $photo = $_POST['photo'];
    $CV = $_POST['CV'];
   
    $sql = "INSERT INTO data1 (s_name,DOB,reg_id,phoneno,email,photo,CV) VALUES ('$s_name', '$DOB','$reg_id','$phoneno','$email','$photo','$CV')";
    if ($conn->query($sql) === TRUE) {
        echo "form details added successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the connection
    $conn->close();
?>
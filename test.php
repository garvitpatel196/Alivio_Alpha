<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "alivio_alpha";
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sql = "INSERT INTO login_info (Email,Name,ID)  VALUES ('garvitpatel','Garvit','123')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>
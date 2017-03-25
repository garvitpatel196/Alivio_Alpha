<?php
// define variables and set to empty values

  $email = $password = "";
  echo "SIGNUP";
    $email = test_input($_POST["email1"]);
    $password=test_input($_POST["password1"]);
    $firstname = test_input($_POST["firstname1"]);
    $lastname=test_input($_POST["lastname1"]);
    $phonenumber= test_input($_POST["phonenumber1"]);
    $city=test_input($_POST["city1"]);

    //create cookie when login
    $cookie_name = "USERNAME";
    $cookie_value = "Garvit Patel";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
    $cookie_name = "PASSWORD";
    $cookie_value = "123456";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

    $servername = "localhost";
    $mysqlusername = "root";
    $mysqlpassword = "";
    $dbname = "alivio_alpha";
    $conn = new mysqli($servername, $mysqlusername, $mysqlpassword, $dbname);

    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    // prepare and bind
    $stmt = $conn->prepare("INSERT INTO  login_info_assist (FirstName, LastName, Email, PhoneNumber, Password, City) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $firstname, $lastname, $email,$phonenumber,$password,$city);
    $stmt->execute();
    echo "Row inserted";
    $stmt->close();
    $conn->close();
    header("Location:home_page.php");
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>

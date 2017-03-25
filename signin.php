<?php
// define variables and set to empty values
ob_start();
  $email = $password = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = test_input($_POST["email"]);
    $password=test_input($_POST["password"]);

    //create cookie when login
    $cookie_name = "USERNAME";
    $cookie_value = "Garvit Patel";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
    $cookie_name = "PASSWORD";
    $cookie_value = "123456";
    //setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

    $servername = "localhost";
    $mysqlusername = "root";
    $mysqlpassword = "";
    $dbname = "alivio_alpha";
    $conn = new mysqli($servername, $mysqlusername, $mysqlpassword, $dbname);

    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM login_info_assist";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      $flag=0;
        // output data of each row
      while($row = $result->fetch_assoc()) {
        if($row['Email']==$email && $row['Password']==$password)
        {
          $flag=1;
          break;
        }
      }
      if($flag==0)
      {
          //echo "<script>document.getElementById('errormessage').innerHTML="Invalid Username or Password...!";</script>";
          echo "<script>Materialize.toast('Invalid Username or Password! Please Try again.', 5000, 'rounded');</script>";
      }
      else{
        //create Session
        session_start();
        $_SESSION["USERNAME"] = $email;
        $_SESSION["PASSWORD"] = $password;
        //echo "Session variables are set.";
        //header("Location: home_page.php");
        echo "<script type='text/javascript'>  window.location='home_page.php'; </script>";

        exit;
      }
    }
    $conn->close();

  }
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  ob_end_flush();
  echo"";
?>

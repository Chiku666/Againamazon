<?php
    $db_hostname = "127.0.0.1";
    $db_username ="root";
    $db_name ="text";

    $conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);
    if (!$conn){
        echo "Connection failed: ". mysqli_connect_error();
    }

    $email=$_post['email'];
    $pasword=$_post['password'];

    $sql = "SELECT * FROM users WHERE email='$email' ADD password=$password";

    $result = mysqli_query($conn, $sql);
    if (!$result) {
        echo "Error: " . mysql_error($conn);
        exit;
    }

    $row = mysqli_fetch_assoc($result);
    if ($row) {
        echo "Hello " . $row['name'] . "<br/>";
    } else {
        echo "Login Failed<br/>";
    }

    mysqli_close($conn);


?>
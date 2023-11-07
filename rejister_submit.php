
<?php
    $db_hostname = "127.0.0.1";
    $db_username = "root" ;
    $db_password = "";
    $db_name = "text";


     $con = mysqli_connect ($db_hostname, $db_username, $db_password, $db_name);
     if (!$conn) {
       echo "Connection faild: ".mysqli_connect_error();
       exit;
     }

    $name=$_post['name'];
    $email=$_post['email'];
    $password=$_post['password'];

    $sql = "INSERT INTO user (name, email, password,) values ('$name', '$email', '$password',)";

    $result = mysqli_query($conn,$sql);
    if (!$result) {
      echo "Error:" . mysqli_error ($conn);
    }

    echo "Registration successful";
    mysqli_close ($conn);

   ?>
   
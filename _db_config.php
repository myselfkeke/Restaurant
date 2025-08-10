<?php
  $server_local = "localhost";
  $username = "root";
  $password = "";
  $db_name = "restaurant";

  $conn = mysqli_connect($server_local, $username, $password, $db_name);

  if (!$conn) {
    echo "Something went wrong. DB not fetched because of this error ---->" . mysqli_connect_errno() ;
  } else {
     echo "✅";
  }
?>
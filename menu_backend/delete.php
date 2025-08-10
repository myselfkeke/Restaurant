<?php
include '../_db_config.php';

  if (  isset($_GET['food_id'])) {
    $id = $_GET['food_id'];
    echo "<pre>";
    print_r($id);

    $delete_sql_query = "DELETE FROM `menu_item` WHERE `food_id` = '$id'";
    $delete_result = mysqli_query($conn, $delete_sql_query);

    if ($delete_result) {
      ?>
      <meta http-equiv="refresh" content="0; url=http://localhost/restaurant/menu_backend/show.php">
      <?php
      echo "<script>alert(`DELETED \n Items deleted permanently`)</script>";
    } else {
      echo "<script>alert(`SORRY \n Something went wrong`)</script>";
    }
  }

?>
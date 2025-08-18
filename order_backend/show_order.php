<?php
include "../_db_config.php";

$customer_name = $_POST['customer_name'];
$table_no = $_POST['table_no'];
$contact_no = $_POST['contact_no'];
$customer_order = $_POST['customer_order'];
$customer_order_str = implode("&", $customer_order);
$user_comment = $_POST['user_comment'];

$insert_sql = "INSERT INTO `order_table` VALUES (NULL, '$customer_name', '$table_no', '$contact_no', '$customer_order_str', '$user_comment')";

$insert_result = mysqli_query($conn, $insert_sql);

if ($insert_result) {
  echo "<script> alert(`SUCCESS\ndata uploded`)</script>";
} else {
  echo "<script> alert(`FAILED\nsomething went wrong`)<script>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./menu_backend_css/add_php.css" class="re">
  <title>display all orders</title>
  <style>
    table {
      text-align: center;
      margin: 0 auto;
      /* border-collapse: separate; */
      /* border-spacing: 3px; */
      /* 👈 gap between cells */
    }

    .update_btn,
    .delete_btn {
      cursor: pointer;
      border: 0;
      outline: none;
      border-radius: 5px;
      color: white;
      font-weight: bold;
      height: 25px;
      width: 60px;
      margin: 1px 1px;
    }

    .delete_btn {
      background-color: orangered;
    }

    .update_btn {
      background-color: #13bc13;
    }

    .delete_btn:hover,
    .update_btn:hover {
      color: black;
      opacity: 0.8;
      transition: all ease 0.3s;
    }
  </style>
</head>

<body>
  <?php
  $search_sql_query = "SELECT * FROM `order_table`";
  $run_query = mysqli_query($conn, $search_sql_query);

  $found_row = mysqli_num_rows($run_query);
  $found_record = mysqli_fetch_assoc($run_query);

  if ($found_row != 0) {
  ?>

    <table border="1" cellspacing="2" width="90%">
      <!-- cell spacing perhaps do not work with modern html 5 so i used border spacing in the style tag in head of this page
       -> now cell spacing working with couple of combined attribute used together -->
      <thead>
        <tr>
          <th>Srl No</th>
          <th>Food Id</th>
          <th>Customer Name</th>
          <th>Table Booked (No)</th>
          <th>Contact Info</th>
          <th>Order Details</th>
          <th>Description</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
      <?php
      $sNo = 1;
      while ($found_record = mysqli_fetch_assoc($run_query)) {
        // why do we need to write while condition in this way .............can't only we wite the variable only here
        echo "
      <tr>
        <td>" . $sNo . "</td>
        <td>" . $found_record['order_id'] . "</td>
        <td>" . ucfirst($found_record['customer_name']) . "</td>
        <td>" . $found_record['table_no'] . "</td>
        <td>" . $found_record['contact_no'] . "</td>
        <td>" . $found_record['order_item'] . "</td>
        <td>" . $found_record['description'] . "</td>
        <td><a href='update_design.php?id=$found_record[order_id]'><input type='submit' value='Edit' class='update_btn'></a> <a href='delete_design.php?id=$found_record[order_id]'><input type='submit' value='Delete' class='delete_btn' onclick='return checkDelete()'></a></td>
      </tr>
      ";
        $sNo++;
      }
    }
      ?>
      </tbody>

    </table>
</body>

</html>
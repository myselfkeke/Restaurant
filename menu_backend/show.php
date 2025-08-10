<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Show dynamic gallery items</title>
  <style>
    h2 {
      text-align: center;
      text-decoration: underline;
    }
    table {
      width: 90%;
      margin: 0 auto;
      text-align: center;
      font-size: 22px;
    }
    .delete_btn {
      background-color: tomato;
      border: none;
      border-radius: 3px;
      cursor: pointer;
      transition: all ease 0.2s;
      font-size: 22px;
      margin: 3px;
    }
    .delete_btn:hover {
      transform: scale(1.03);
      background-color: red;
    }
    .table_image {
      height: 90px;
      width: 90px;
      border-radius: 10px;
      padding: 0;
      margin: 3px auto;
    }
    </style>
</head>

<body>
  <h2>Menu Items</h2>
  <?php
  include "../_db_config.php";
  $sql_query = "SELECT * FROM `menu_item`";
  $result = mysqli_query($conn, $sql_query);

  $row = mysqli_num_rows($result);
  $record = mysqli_fetch_assoc($result);
  echo "<pre>";
  print_r($record);
  ?>

  <table border="1px" cellspacing="2">
    <thead>
      <tr>
        <th>S No</th>
        <th>food ID</th>
        <th>Food Image</th>
        <th>Food Title</th>
        <th>Food Price</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <div class="table-row-container">
        <?php
        $sNo = 1;
        while ($record = mysqli_fetch_assoc($result)) {
          echo "
          <tr>
            <td>".$sNo."</td>
            <td>".$record['food_id']."</td>
            <td>".$record['food_title']."</td>
            <td>".$record['food_price']."</td>
            <td>
              <img class='table_image' src=".$record['food_file']." alt='food photo'>
            </td>
            <td><a href='delete.php?food_id=$record[food_id]'><input type='submit' value='Delete' class='delete_btn' onclick='return checkDelete()'></a></td>
          </tr>
          ";
          $sNo++;
        }
          ?>
    </tbody>
    </div>
  </table>
  <div class="image"></div>
  <!--  -->
  <script>
    function checkDelete() {
      alert(`ALERT ! \n Sure you want to delete?`)
    }
  </script>
</body>
</html>
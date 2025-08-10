<?php
include "../_db_config.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./menu_backend_css/add_php.css" class="re">
  <title>Add items to menu bar</title>
</head>
<body>
  <form action="#" method="POST" enctype="multipart/form-data">
    <div class="form-container">
      <input name="food_title" type="text" placeholder="name (title) ...">
      <input name="food_price" type="text" placeholder="price ...">
      <div class="file-upload-wrapper"><input name="food_img_file" type="file"></div>
      <input type="submit" value="Upload">
    </div>
  </form>
</body>
</html>

<?php
$food_title = $_POST['food_title'];
$food_price = $_POST['food_price'];

$food_img_file = $_FILES['food_img_file']['name'];
$tmp_name = $_FILES['food_img_file']['tmp_name'];
$upload_dir = "upload_folder/". $food_img_file;
move_uploaded_file($tmp_name, $upload_dir);





$insert_sql = "INSERT INTO `menu_item` VALUES (NULL, '$food_title', '$food_price', '$upload_dir')";
$insert_result = mysqli_query($conn, $insert_sql);

if ($insert_result) {
  echo "<script> alert(`SUCCESS\ndata uploded`)</script>";
} else {
  echo "<script> alert(`FAILED\nsomething went wrong`)<script>";
}

?>
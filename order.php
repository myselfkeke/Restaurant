<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" class="re">
  <link rel="stylesheet" href="about_us.css" class="re">
  <link rel="stylesheet" href="order.css" class="re">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- font awesome version 4 -->
   <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <title>Restaurant</title>
</head>
<body>
  <?php
  include "header.php";
  ?>

     <!-- code for about us hero section starts here -->
    <div class="container">
    <div class="container-left">
      <h1>
        <span style="color: orange;" >Order Now</span>
      </h1>
      <p>The Best Restaurant</p>
      <br>
      <br>
      <button style="background-color: #02a237; width: 170px;"><a href="tel:+91 8888 666 777">Order Over Call</a></button>
      <br>
      <img src="./images/eating.png" alt="eating">
    </div>
    <form action="./order_backend/show_order.php" method="POST">
      <div class="container-right-order-now-form">
        <input name="customer_name" placeholder="Your Name..." type="text">
        <select name="table_no" id="">
          <option value="">Select your table</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
        </select>
        <input name="contact_no" placeholder="Contact number" type="text">
        <p>check your choices</p>
        <div class="checkbox-grid">
          <label><input name="customer_order[]"  value="pizza" type="checkbox"> Pizza</label>
          <label><input name="customer_order[]"  value="dosha" type="checkbox"> Dosha</label>
          <label><input name="customer_order[]"  value="cake" type="checkbox"> Cake</label>
          <label><input name="customer_order[]"  value="samosha" type="checkbox"> Samosa</label>
          <label><input name="customer_order[]"  value="ice_cream" type="checkbox"> Ice Cream</label>
          <label><input name="customer_order[]"  value="poha" type="checkbox"> Poha</label>
          <label><input name="customer_order[]"  value="chole" type="checkbox"> Chole</label>
          <label><input name="customer_order[]"  value="dokla" type="checkbox"> Dhokla</label>
          <!-- <label><input type="checkbox"> Other</label> -->
        </div>
        <textarea placeholder="specify somthing e.g.&#10;extra chilli or half plate,&#10;waiter shoul know english, &#10;etc" name="user_comment" id=""></textarea>
        <input placeholder="" type="submit" value="Order Now">
        <div class="address">
          <p><Address>Address: 101, Navi Mumbai, Maharastra 400081</Address>
          <br>
          contact: +91 8888 666 777
          <br>
          email: eat@together.com
          </p>
        </div>
      </div>
    </form>
  </div>
         
  <?php
  include "newsletter.php";
  include "footer.php";
  ?>
</body>
</html>
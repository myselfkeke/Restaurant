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
      <button style="background-color: #02a237; width: 170px;">Order Over Call</button>
      <br>
      <img src="./images/eating.png" alt="eating">
    </div>
    <div class="container-right-order-now-form">
      <input placeholder="Your Name..." type="text">
      <select name="" id="">
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
      <input placeholder="Contact number" type="text">
      <p>check your choices</p>
      <div class="checkbox-grid">
        <label><input type="checkbox"> Pizza</label>
        <label><input type="checkbox"> Dosha</label>
        <label><input type="checkbox"> Cake</label>
        <label><input type="checkbox"> Samosa</label>
        <label><input type="checkbox"> Ice Cream</label>
        <label><input type="checkbox"> Poha</label>
        <label><input type="checkbox"> Chole</label>
        <label><input type="checkbox"> Dhokla</label>
        <!-- <label><input type="checkbox"> Other</label> -->
      </div>
      <textarea placeholder="specify somthing e.g.&#10;extra chilli or half plate,&#10;waiter shoul know english, &#10;etc" name="" id=""></textarea>
      <input placeholder="" type="submit" value="Order Now">
    </div>
  </div>
    
    <!-- code for our speciality section starts here... -->
     
     <br>
    <h2 class="featured-heading">Our Chef's</h2>
    <hr>
    <div class="speciality-container">
      <div class="phamplet1">
        <img src="./images/chef1.png" alt="">
        <p>Non voluptatum voluptatibus quis sint. Sed tempora maiores quam consectetur magni libero modi voluptatum voluptatibus enim earum deleniti magnam obcaecati quae aliquam, culpa voluptas esse beatae autem doloribus commodi? Qui, sed quasi consequatur autem nisi architecto est ducimus atque ut rerum excepturi recusandae aut fugiat distinctio deleniti illum at aperiam debitis quas beatae modi necessitatibus voluptatem assumenda. Aperiam necessitatibus nulla mollitia voluptatibus nemo amet ratione perspiciatis beatae rem commodi vero a ducimus asperiores architecto ipsa ad eveniet, nam corporis voluptatum nostrum quia provident minus. Earum consectetur vel ipsam repellat veritatis laudantium nam, voluptas magni omnis libero facere repellendus a velit, saepe maxime iste? Debitis nihil repellendus ipsum optio sequi provident, dignissimos quo, exercitationem repellat, mollitia aliquam necessitatibus excepturi tempora eligendi voluptate quos vitae odit minus saepe quod ratione amet reprehenderit cumque! Fuga autem eius ea debitis pariatur repellendus?</p>
      </div>
      <div class="phamplet2">
        <p>Ngnissimos, illum repellat. Temporibus tenetur delectus at magnam placeat quisquam, vitae cumque quasi libero doloribus neque ratione voluptatem, sed eligendi velit numquam itaque tempore aliquam eum deleniti reiciendis. Minus atque nihil laborum repudiandae quis, suscipit rem possimus ducimus totam voluptatem. Inventore consectetur ut quod nisi placeat debitis. Nesciunt quod autem accusamus fuga voluptatum voluptatibus, voluptates nihil reiciendis laudantium ipsam nobis nemo, placeat nostrum ullam cumque non. Dolor nisi rerum suscipit doloremque quas, ullam dolore laboriosam blanditiis ipsa iusto magni sunt tenetur sit! Sit ipsam repudiandae quas id, nisi inventore! Incidunt dolore ex inventore reprehenderit numquam, eveniet velit quae neque perferendis labore consectetur nobis dolor quidem aspernatur cum ad est ipsa, non vitae facere provident animi cupiditate, nihil aut. Officiis obcaecati earum nam ducimus exercitationem ullam suscipit quo accusamus provident.</p>
        <img src="./images/chef2.png" alt="">
      </div>
      <div class="phamplet3">
        <img src="./images/chef3.png" alt="">
        <p>Non voluptatum voluptatibus quis sint. Sed tempora maiores quam consectetur magni libero modi voluptatum voluptatibus enim earum deleniti magnam obcaecati quae aliquam, culpa voluptas esse beatae autem doloribus commodi? Qui, sed quasi consequatur autem nisi architecto est ducimus atque ut rerum excepturi recusandae aut fugiat distinctio deleniti illum at aperiam debitis quas beatae modi necessitatibus voluptatem assumenda. Aperiam necessitatibus nulla mollitia voluptatibus nemo amet ratione perspiciatis beatae rem commodi vero a ducimus asperiores architecto ipsa ad eveniet, nam corporis voluptatum nostrum quia provident minus. Earum consectetur vel ipsam repellat veritatis laudantium nam, voluptas magni omnis libero facere repellendus a velit, saepe maxime iste? Debitis nihil repellendus ipsum optio sequi provident, dignissimos quo, exercitationem repellat, mollitia aliquam necessitatibus excepturi tempora eligendi voluptate quos vitae odit minus saepe quod ratione amet reprehenderit cumque! Fuga autem eius ea debitis pariatur repellendus?</p>
      </div>
    </div>
    <!-- code for out speciality section ends here... -->
         
  <?php
  include "newsletter.php";
  include "footer.php";
  ?>
</body>
</html>
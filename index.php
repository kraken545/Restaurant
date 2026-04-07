<?php include('pages/data.php');
include('dbcalls/db_connection.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo $Restaurant_name; ?> - Home</title>
  <link rel="stylesheet" href="pages/style.css" />
</head>

<body>
  <nav>
    <div class="logo"><a href="index.php">Pizzeria Latina</a></div>
    <ul>

      <li><a href="pages/menu.php">Menu</a></li>
      <li><a href="pages/about.php">About</a></li>
      <li><a href="pages/club.php">Club</a></li>
     
    </ul>
  </nav>

  <section class="pizza">
    <div class="pizza-content">
      <div class="pizza-content-div">
        <h1 class="dancing">
          Welcome to
          <?php echo $Restaurant_name; ?>
        </h1>
        <p class="italiano-style groter">
          Experience the finest Latin cuisine in a warm and welcoming
          atmosphere
        </p>
      </div>
      <div class="pizza-content-div">
        <h2 class="dancing">About Our Pizzeria</h2>
        <p class="italiano-style groter">Enjoy our delicious pizzas and more!</p>
      </div>
    </div>
   
    </div>
  </section>


  <footer>
    <p class="dancing">&copy; 2026 <?php echo $Restaurant_name; ?>. All rights reserved.</p>
  </footer>



  <script src="cart.js"></script>
</body>

</html>
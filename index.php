<?php include('data.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo $Restaurant_name; ?> - Home</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Italianno&display=swap" rel="stylesheet">
</head>

<body>
  <nav>
    <div class="logo">Pizzeria Latina</div>
    <ul>

      <li><a href="index.php">Home</a></li>
      <li><a href="menu.php">Menu</a></li>
      <li><a href="about.php">About</a></li>
    </ul>
  </nav>

  <section class="pizza">
    <div class="pizza-content">
      <div class="pizza-content-div">
        <h1>
          Welcome to
          <?php echo $Restaurant_name; ?>
        </h1>
        <p>
          Experience the finest Latin cuisine in a warm and welcoming
          atmosphere
        </p>
      </div>
      <div class="pizza-content-div">
        <h2>About Our Pizzeria</h2>
        <p>Enjoy our delicious pizzas and more!</p>
      </div>
    </div>
  </section>


  <footer>
    <p>&copy; 2026 <?php echo $Restaurant_name; ?>. All rights reserved.</p>
  </footer>

  <script src="anim.js"></script>
</body>

</html>
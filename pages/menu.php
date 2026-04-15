<?php include('data.php');
include('../dbcalls/db_connection.php');
include('../dbcalls/read.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo $restaurantName; ?> - Menu</title>
  <link rel="stylesheet" href="../pages/style.css" />
</head>

<body>
  <nav>
    <div class="logo"><a href="../index.php">Pizzeria Latina</a></div>
    <ul>

      <li><a href="menu.php">Menu</a></li>
      <li><a href="about.php">About</a></li>
      <li><a href="club.php">Club</a></li>
      <li class="login-item"><a href="admin.php">Admin Panel</a></li>
    </ul>
  </nav>
  <section class="back-blur">
    <div class="top-menu">
      <div class="text-menu">Our Menu</div>
      <div class="cartSidebar">
        <h3>Wagen</h3>
        <ul id="cartItems"></ul>
        <div id="cartTotal">Total: €0.00</div>
        <button id="checkoutBtn">afrekenen</button>
      </div>
    </div>
    <section class="menu-container">

      <?php

     
      $categories = [];
      foreach ($menu_items as $item) {
        $cat = $item['type'];
        if (!in_array($cat, $categories)) {
          $categories[] = $cat;
        }
      }

      
      foreach ($categories as $categorie) {
      ?>
        <div class="menu-section" id="scrolbar">
          <h2 class="menu-title" data-text="<?php echo ($categorie); ?>">
            <?php echo ($categorie); ?>
          </h2>
          <div class="menu-items">
            <?php foreach ($menu_items as $item){ ?>
              <?php if ($item['type'] == $categorie){ ?>
                <div class="menu-item">
                  <h3><?php echo ($item['naam']); ?></h3>
                  <p><?php echo ($item['omschrijving'] ?: ''); ?></p>
                  <div class="menu-meta">
                    <span class="price">€ <?php echo number_format(floatval($item['price']), 2); ?></span>
                    <button class="add-to-cart"
                      data-name="<?php echo ($item['naam']); ?>"
                      data-price="<?php echo ($item['price']); ?>">
                      <?php echo $add; ?>
                    </button>
                  </div>
                </div>
              <?php } ?>
            <?php } ?>
          </div>
        </div>
      <?php
      }
      ?>
    </section>
  </section>
  <footer>
    <p class="dancing">&copy; 2026 <?php echo $restaurantName; ?>. All rights reserved.</p>
  </footer>

  <script src="cart.js"></script>

</body>

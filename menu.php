<?php include('data.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo $Restaurant_name; ?> - Menu</title>
  <link rel="stylesheet" href="style.css" />
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
  <section class="back-blur">
    <div class="text-menu">Our Menu</div>

    <section class="menu-container">


      <div class="menu-section">
        <h2>🍽️ Appetizers</h2>
        <div class="menu-items">
          <div class="menu-item">
            <h3>Bruschetta</h3>
            <p>Toasted bread with tomato, basil and olive oil.</p>
          </div>

          <div class="menu-item">
            <h3>Chicken Wings</h3>
            <p>Fried wings with spicy sauce or barbecue.</p>
          </div>

          <div class="menu-item">
            <h3>Caesar Salad</h3>
            <p>
              Romaine lettuce, croutons, parmesan cheese and Caesar dressing.
            </p>
          </div>

          <div class="menu-item">
            <h3>Mozzarella Sticks</h3>
            <p>
              Breaded and fried mozzarella sticks, served with marinara sauce.
            </p>
          </div>
        </div>
      </div>

      <div class="menu-section" id="pizza-menu">
        <h2>🍕 Pizzas</h2>

        <div class="submenu">
          <h3>Classic Pizzas</h3>
          <div class="menu-items">
            <div class="menu-item">
              <h4>Margherita</h4>
              <p>Tomato sauce, mozzarella, fresh basil.</p>
            </div>

            <div class="menu-item">
              <h4>Pepperoni</h4>
              <p>Tomato sauce, mozzarella and pepperoni slices.</p>
            </div>

            <div class="menu-item">
              <h4>Four Cheese</h4>
              <p>Mix of mozzarella, gorgonzola, parmesan and goat cheese.</p>
            </div>
          </div>
        </div>

        <div class="submenu">
          <h3>Special Pizzas</h3>
          <div class="menu-items">
            <div class="menu-item">
              <h4>BBQ Chicken Pizza</h4>
              <p>Barbecue sauce, grilled chicken, red onion and cilantro.</p>
            </div>

            <div class="menu-item">
              <h4>Hawaiian</h4>
              <p>Tomato sauce, mozzarella, ham and pineapple.</p>
            </div>

            <div class="menu-item">
              <h4>Vegetarian</h4>
              <p>
                Tomato sauce, mozzarella, mushrooms, peppers, onion and olives.
              </p>
            </div>
          </div>
        </div>

        <div class="submenu">
          <h3>Gourmet Pizzas</h3>
          <div class="menu-items">
            <div class="menu-item">
              <h4>Truffle Pizza</h4>
              <p>Cream sauce, mozzarella, mushrooms and truffle oil.</p>
            </div>

            <div class="menu-item">
              <h4>Mediterranean Pizza</h4>
              <p>
                Tomato sauce, mozzarella, spinach, artichokes, olives and feta.
              </p>
            </div>

            <div class="menu-item">
              <h4>Spicy Pizza</h4>
              <p>
                Tomato sauce, mozzarella, spicy salami, jalapeños and onion.
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="menu-section">
        <h2>🥤 Beverages</h2>
        <div class="menu-items">
          <div class="menu-item">
            <h3>Soft Drinks</h3>
            <p>Coca-Cola, Sprite, Fanta, mineral water.</p>
          </div>

          <div class="menu-item">
            <h3>Beers</h3>
            <p>Local beer, craft beer, alcohol-free beer.</p>
          </div>

          <div class="menu-item">
            <h3>Wines</h3>
            <p>Red wine, white wine, rosé wine.</p>
          </div>
        </div>
      </div>

      <div class="menu-section">
        <h2>🍰 Desserts</h2>
        <div class="menu-items">
          <div class="menu-item">
            <h3>Cheesecake</h3>
            <p>Creamy cheese tart with strawberry jam.</p>
          </div>

          <div class="menu-item">
            <h3>Ice Cream</h3>
            <p>Varieties: vanilla, chocolate, strawberry.</p>
          </div>

          <div class="menu-item">
            <h3>Chocolate Brownie</h3>
            <p>Warm brownie with walnuts, served with vanilla ice cream.</p>
          </div>
        </div>
      </div>
    </section>
  </section>
  <footer>
    <p class="italiano-style">&copy; 2026 <?php echo $Restaurant_name; ?>. All rights reserved.</p>
  </footer>
  <script src="anim.js"></script>
</body>

</html>
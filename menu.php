<?php include('data.php');
include('db_connection.php'); ?>

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
            <div class="menu-meta">
              <span class="price">€6.50</span>
              <button class="add-to-cart" data-name="Bruschetta" data-price="6.5">Agregar al carrito</button>
            </div>
          </div>

          <div class="menu-item">
            <h3>Chicken Wings</h3>
            <p>Fried wings with spicy sauce or barbecue.</p>
            <div class="menu-meta">
              <span class="price">€8.50</span>
              <button class="add-to-cart" data-name="Chicken Wings" data-price="8.5">Agregar al carrito</button>
            </div>
          </div>

          <div class="menu-item">
            <h3>Caesar Salad</h3>
            <p>
              Romaine lettuce, croutons, parmesan cheese and Caesar dressing.
            </p>
            <div class="menu-meta">
              <span class="price">€7.00</span>
              <button class="add-to-cart" data-name="Caesar Salad" data-price="7.0">Agregar al carrito</button>
            </div>
          </div>

          <div class="menu-item">
            <h3>Mozzarella Sticks</h3>
            <p>
              Breaded and fried mozzarella sticks, served with marinara sauce.
            </p>
            <div class="menu-meta">
              <span class="price">€6.00</span>
              <button class="add-to-cart" data-name="Mozzarella Sticks" data-price="6.0">Agregar al carrito</button>
            </div>
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
              <div class="menu-meta">
                <span class="price">€9.00</span>
                <button class="add-to-cart" data-name="Margherita" data-price="9.0">Agregar al carrito</button>
              </div>
            </div>

            <div class="menu-item">
              <h4>Pepperoni</h4>
              <p>Tomato sauce, mozzarella and pepperoni slices.</p>
              <div class="menu-meta">
                <span class="price">€10.00</span>
                <button class="add-to-cart" data-name="Pepperoni" data-price="10.0">Agregar al carrito</button>
              </div>
            </div>

            <div class="menu-item">
              <h4>Four Cheese</h4>
              <p>Mix of mozzarella, gorgonzola, parmesan and goat cheese.</p>
              <div class="menu-meta">
                <span class="price">€11.00</span>
                <button class="add-to-cart" data-name="Four Cheese" data-price="11.0">Agregar al carrito</button>
              </div>
            </div>
          </div>
        </div>

        <div class="submenu">
          <h3>Special Pizzas</h3>
          <div class="menu-items">
            <div class="menu-item">
              <h4>BBQ Chicken Pizza</h4>
              <p>Barbecue sauce, grilled chicken, red onion and cilantro.</p>
              <div class="menu-meta">
                <span class="price">€12.00</span>
                <button class="add-to-cart" data-name="BBQ Chicken Pizza" data-price="12.0">Agregar al carrito</button>
              </div>
            </div>

            <div class="menu-item">
              <h4>Hawaiian</h4>
              <p>Tomato sauce, mozzarella, ham and pineapple.</p>
              <div class="menu-meta">
                <span class="price">€11.00</span>
                <button class="add-to-cart" data-name="Hawaiian" data-price="11.0">Agregar al carrito</button>
              </div>
            </div>

            <div class="menu-item">
              <h4>Vegetarian</h4>
              <p>
                Tomato sauce, mozzarella, mushrooms, peppers, onion and olives.
              </p>
              <div class="menu-meta">
                <span class="price">€10.00</span>
                <button class="add-to-cart" data-name="Vegetarian" data-price="10.0">Agregar al carrito</button>
              </div>
            </div>
          </div>
        </div>

        <div class="submenu">
          <h3>Gourmet Pizzas</h3>
          <div class="menu-items">
            <div class="menu-item">
              <h4>Truffle Pizza</h4>
              <p>Cream sauce, mozzarella, mushrooms and truffle oil.</p>
              <div class="menu-meta">
                <span class="price">€15.00</span>
                <button class="add-to-cart" data-name="Truffle Pizza" data-price="15.0">Agregar al carrito</button>
              </div>
            </div>

            <div class="menu-item">
              <h4>Mediterranean Pizza</h4>
              <p>
                Tomato sauce, mozzarella, spinach, artichokes, olives and feta.
              </p>
              <div class="menu-meta">
                <span class="price">€13.00</span>
                <button class="add-to-cart" data-name="Mediterranean Pizza" data-price="13.0">Agregar al carrito</button>
              </div>
            </div>

            <div class="menu-item">
              <h4>Spicy Pizza</h4>
              <p>
                Tomato sauce, mozzarella, spicy salami, jalapeños and onion.
              </p>
              <div class="menu-meta">
                <span class="price">€12.00</span>
                <button class="add-to-cart" data-name="Spicy Pizza" data-price="12.0">Agregar al carrito</button>
              </div>
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
            <div class="menu-meta">
              <span class="price">€2.50</span>
              <button class="add-to-cart" data-name="Soft Drinks" data-price="2.5">Agregar al carrito</button>
            </div>
          </div>

          <div class="menu-item">
            <h3>Beers</h3>
            <p>Local beer, craft beer, alcohol-free beer.</p>
            <div class="menu-meta">
              <span class="price">€4.50</span>
              <button class="add-to-cart" data-name="Beers" data-price="4.5">Agregar al carrito</button>
            </div>
          </div>

          <div class="menu-item">
            <h3>Wines</h3>
            <p>Red wine, white wine, rosé wine.</p>
            <div class="menu-meta">
              <span class="price">€6.50</span>
              <button class="add-to-cart" data-name="Wines" data-price="6.5">Agregar al carrito</button>
            </div>
          </div>
        </div>
      </div>

      <div class="menu-section">
        <h2>🍰 Desserts</h2>
        <div class="menu-items">
          <div class="menu-item">
            <h3>Cheesecake</h3>
            <p>Creamy cheese tart with strawberry jam.</p>
            <div class="menu-meta">
              <span class="price">€5.00</span>
              <button class="add-to-cart" data-name="Cheesecake" data-price="5.0">Agregar al carrito</button>
            </div>
          </div>

          <div class="menu-item">
            <h3>Ice Cream</h3>
            <p>Varieties: vanilla, chocolate, strawberry.</p>
            <div class="menu-meta">
              <span class="price">€4.00</span>
              <button class="add-to-cart" data-name="Ice Cream" data-price="4.0">Agregar al carrito</button>
            </div>
          </div>

          <div class="menu-item">
            <h3>Chocolate Brownie</h3>
            <p>Warm brownie with walnuts, served with vanilla ice cream.</p>
            <div class="menu-meta">
              <span class="price">€5.00</span>
              <button class="add-to-cart" data-name="Chocolate Brownie" data-price="5.0">Agregar al carrito</button>
            </div>
          </div>
        </div>
      </div>
      <div id="cartSidebar">
        <h3>Carrito</h3>
        <ul id="cartItems"></ul>
        <div id="cartTotal">Total: €0.00</div>
        <button id="checkoutBtn">Pagar</button>
      </div>
    </section>
  </section>

  <footer>
    <p class="italiano-style">&copy; 2026 <?php echo $Restaurant_name; ?>. All rights reserved.</p>
  </footer>
  <script src="cart.js"></script>
</body>

</html>
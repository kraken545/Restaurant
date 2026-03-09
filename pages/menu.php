<?php include('data.php');
include('../dbcalls/db_connection.php');
include('../dbcalls/read.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo $Restaurant_name; ?> - Menu</title>
  <link rel="stylesheet" href="../pages/style.css" />
</head>

<body>
  <nav>
    <div class="logo"><a href="../index.php">Pizzeria Latina</a></div>
    <ul>

      <li><a href="menu.php">Menu</a></li>
      <li><a href="about.php">About</a></li>
      <li><a href="club.php">Club</a></li>
    </ul>
  </nav>
  <section class="back-blur">
    <div class="top-menu">
      <div class="text-menu">Our Menu</div>
      <div class="cartSidebar">
        <h3>Carrito</h3>
        <ul id="cartItems"></ul>
        <div id="cartTotal">Total: €0.00</div>
        <button id="checkoutBtn">afrekenen</button>
      </div>
    </div>
    <section class="menu-container">


      <div class="menu-section" id="scrolbar">
        <h2>🍽️ Appetizers</h2>
        <div class="menu-items">
          <div class="menu-item">
            <h3>Bruschetta</h3>
            <p>Toasted bread with tomato, basil and olive oil.</p>
            <div class="menu-meta">
              <span class="price">€6.50</span>
              <button class="add-to-cart" data-name="Bruschetta" data-price="6.5"><?php echo $add; ?></button>
            </div>
          </div>

          <div class="menu-item">
            <h3>Chicken Wings</h3>
            <p>Fried wings with spicy sauce or barbecue.</p>
            <div class="menu-meta">
              <span class="price">€8.50</span>
              <button class="add-to-cart" data-name="Chicken Wings" data-price="8.5"><?php echo $add; ?></button>
            </div>
          </div>

          <div class="menu-item">
            <h3>Caesar Salad</h3>
            <p>
              Romaine lettuce, croutons, parmesan cheese and Caesar dressing.
            </p>
            <div class="menu-meta">
              <span class="price">€7.00</span>
              <button class="add-to-cart" data-name="Caesar Salad" data-price="7.0"><?php echo $add; ?></button>
            </div>
          </div>

          <div class="menu-item">
            <h3>Mozzarella Sticks</h3>
            <p>
              Breaded and fried mozzarella sticks, served with marinara sauce.
            </p>
            <div class="menu-meta">
              <span class="price">€6.00</span>
              <button class="add-to-cart" data-name="Mozzarella Sticks" data-price="6.0"><?php echo $add; ?></button>
            </div>
          </div>
        </div>
      </div>

      <div class="menu-section" id="scrolbar">
        <h2>🍕 Pizzas</h2>

        <div class="submenu">
          <h3>Classic Pizzas</h3>
          <div class="menu-items">
            <div class="menu-item">
              <h4><?php echo $menu_items[0]["naam"]; ?></h4>
              <p>Tomato sauce, mozzarella, fresh basil.</p>
              <div class="menu-meta">
                <span class="price">€9.00</span>
                <button class="add-to-cart" data-name="<?php echo $menu_items[0]["naam"]; ?>" data-price="9.0"><?php echo $add; ?></button>
              </div>
            </div>

            <div class="menu-item">
              <h4><?php echo $menu_items[1]["naam"]; ?></h4>
              <p>Tomato sauce, mozzarella and pepperoni slices.</p>
              <div class="menu-meta">
                <span class="price">€10.00</span>
                <button class="add-to-cart" data-name="<?php echo $menu_items[1]["naam"]; ?>" data-price="10.0"><?php echo $add; ?></button>
              </div>
            </div>

            <div class="menu-item">
              <h4><?php echo $menu_items[2]["naam"]; ?></h4>
              <p>Mix of mozzarella, gorgonzola, parmesan and goat cheese.</p>
              <div class="menu-meta">
                <span class="price">€11.00</span>
                <button class="add-to-cart" data-name="<?php echo $menu_items[2]["naam"]; ?>" data-price="11.0"><?php echo $add; ?></button>
              </div>
            </div>
          </div>
        </div>

        <div class="submenu">
          <h3>Special Pizzas</h3>
          <div class="menu-items">
            <div class="menu-item">
              <h4><?php echo $menu_items[3]["naam"]; ?></h4>
              <p>Barbecue sauce, grilled chicken, red onion and cilantro.</p>
              <div class="menu-meta">
                <span class="price">€12.00</span>
                <button class="add-to-cart" data-name="BBQ Chicken Pizza" data-price="12.0"><?php echo $add; ?></button>
              </div>
            </div>

            <div class="menu-item">
              <h4><?php echo $menu_items[4]["naam"]; ?></h4>
              <p>Tomato sauce, mozzarella, ham and pineapple.</p>
              <div class="menu-meta">
                <span class="price">€11.00</span>
                <button class="add-to-cart" data-name="<?php echo $menu_items[4]["naam"]; ?>" data-price="11.0"><?php echo $add; ?></button>
              </div>
            </div>

            <div class="menu-item">
              <h4><?php echo $menu_items[5]["naam"]; ?></h4>
              <p>
                Tomato sauce, mozzarella, mushrooms, peppers, onion and olives.
              </p>
              <div class="menu-meta">
                <span class="price">€10.00</span>
                <button class="add-to-cart" data-name="<?php echo $menu_items[5]["naam"]; ?>" data-price="10.0"><?php echo $add; ?></button>
              </div>
            </div>
          </div>
        </div>

        <div class="submenu">
          <h3>Gourmet Pizzas</h3>
          <div class="menu-items">
            <div class="menu-item">
              <h4><?php echo $menu_items[6]["naam"]; ?></h4>
              <p>Cream sauce, mozzarella, mushrooms and truffle oil.</p>
              <div class="menu-meta">
                <span class="price">€15.00</span>
                <button class="add-to-cart" data-name="<?php echo $menu_items[6]["naam"]; ?>" data-price="15.0"><?php echo $add; ?></button>
              </div>
            </div>

            <div class="menu-item">
              <h4><?php echo $menu_items[7]["naam"]; ?></h4>
              <p>
                Tomato sauce, mozzarella, spinach, artichokes, olives and feta.
              </p>
              <div class="menu-meta">
                <span class="price">€13.00</span>
                <button class="add-to-cart" data-name="<?php echo $menu_items[7]["naam"]; ?>" data-price="13.0"><?php echo $add; ?></button>
              </div>
            </div>

            <div class="menu-item">
              <h4><?php echo $menu_items[8]["naam"]; ?></h4>
              <p>
                Tomato sauce, mozzarella, spicy salami, jalapeños and onion.
              </p>
              <div class="menu-meta">
                <span class="price">€12.00</span>
                <button class="add-to-cart" data-name="<?php echo $menu_items[8]["naam"]; ?>" data-price="12.0"><?php echo $add; ?></button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="menu-section" id="scrolbar">
        <h2>🥤 Beverages</h2>
        <div class="menu-items">
          <div class="title">
            <div> Soft Drinks </div>

          </div>
          <div class="menu-item">
            <p><?php echo $menu_items[9]["naam"]; ?></p>
            <div class="menu-meta">
              <span class="price">€2.50</span>
              <button class="add-to-cart" data-name="Soft Drinks" data-price="2.5"><?php echo $add; ?></button>
            </div>
          </div>
          <div class="menu-item">
            <p> <?php echo $menu_items[10]["naam"]; ?> </p>
            <div class="menu-meta">
              <span class="price">€2.50</span>
              <button class="add-to-cart" data-name="Soft Drinks" data-price="2.5"><?php echo $add; ?></button>
            </div>
          </div>
          <div class="menu-item">
            <p> <?php echo $menu_items[11]["naam"]; ?> </p>
            <div class="menu-meta">
              <span class="price">€2.50</span>
              <button class="add-to-cart" data-name="Soft Drinks" data-price="2.5"><?php echo $add; ?></button>
            </div>
          </div>
          <div class="menu-item">
            <p><?php echo $menu_items[12]["naam"]; ?></p>
            <div class="menu-meta">
              <span class="price">€2.50</span>
              <button class="add-to-cart" data-name="Soft Drinks" data-price="2.5"><?php echo $add; ?></button>
            </div>
          </div>
          <div class="title">
            <div>Beers</div>

          </div>
          <div class="menu-item">
            <p>Local beer</p>
            <div class=" menu-meta">
              <span class="price">€4.50</span>
              <button class="add-to-cart" data-name="Beers" data-price="4.5"><?php echo $add; ?></button>
            </div>
          </div>
          <div class="menu-item">
            <p> craft beer</p>
            <div class=" menu-meta">
              <span class="price">€4.50</span>
              <button class="add-to-cart" data-name="Beers" data-price="4.5"><?php echo $add; ?></button>
            </div>
          </div>
          <div class="menu-item">
            <p> alcohol-free beer</p>
            <div class=" menu-meta">
              <span class="price">€4.50</span>
              <button class="add-to-cart" data-name="Beers" data-price="4.5"><?php echo $add; ?></button>
            </div>
          </div>
          <div class="title">
            <div>Wines</div>
          </div>
          <div class="menu-item">
            <p>Red wine</p>
            <div class="menu-meta">
              <span class="price">€6.50</span>
              <button class="add-to-cart" data-name="Wines" data-price="6.5"><?php echo $add; ?></button>
            </div>
          </div>
          <div class="menu-item">
            <p> white wine</p>
            <div class="menu-meta">
              <span class="price">€6.50</span>
              <button class="add-to-cart" data-name="Wines" data-price="6.5"><?php echo $add; ?></button>
            </div>
          </div>
          <div class="menu-item">
            <p> rosé wine</p>
            <div class="menu-meta">
              <span class="price">€6.50</span>
              <button class="add-to-cart" data-name="Wines" data-price="6.5"><?php echo $add; ?></button>
            </div>
          </div>
        </div>
      </div>

      <div class="menu-section" id="scrolbar">
        <h2>🍰 <?php echo $menu_items[21]["type"]; ?></h2>
        <div class="menu-items">
          <div class="menu-item">
            <h3><?php echo $menu_items[19]["naam"]; ?></h3>
            <p>Creamy cheese tart with strawberry jam.</p>
            <div class="menu-meta">
              <span class="price">€5.00</span>
              <button class="add-to-cart" data-name="<?php echo $menu_items[19]["naam"]; ?>" data-price="5.0"><?php echo $add; ?></button>
            </div>
          </div>
          <div class="menu-item">
            <h3><?php echo $menu_items[20]["naam"]; ?></h3>
            <p>Warm brownie with walnuts, served with vanilla ice cream.</p>
            <div class="menu-meta">
              <span class="price">€5.00</span>
              <button class="add-to-cart" data-name="<?php echo $menu_items[20]["naam"]; ?>" data-price="5.0"><?php echo $add; ?></button>
            </div>
          </div>
          <div class="title">
            <div>Ice Cream</div>
          </div>
          <div class="menu-item">
            <p>Vanilla</p>
            <div class="menu-meta">
              <span class="price">€4.00</span>
              <button class="add-to-cart" data-name="Ice Cream - Vanilla" data-price="4.0"><?php echo $add; ?></button>
            </div>
          </div>
          <div class="menu-item">
            <p>Chocolate</p>
            <div class="menu-meta">
              <span class="price">€4.00</span>
              <button class="add-to-cart" data-name="Ice Cream - Chocolate" data-price="4.0"><?php echo $add; ?></button>
            </div>
          </div>
          <div class="menu-item">
            <p>Strawberry</p>
            <div class="menu-meta">
              <span class="price">€4.00</span>
              <button class="add-to-cart" data-name="Ice Cream - Strawberry" data-price="4.0"><?php echo $add; ?></button>
            </div>
          </div>


        </div>
      </div>
      <div class="spacecart"></div>

    </section>
  </section>

  <footer>
    <p class="dancing">&copy; 2026 <?php echo $Restaurant_name; ?>. All rights reserved.</p>
  </footer>
  <script src="cart.js"></script>
</body>

</html>
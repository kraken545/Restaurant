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
  <script crossorigin src="https://unpkg.com/react@18/umd/react.development.js"></script>
  <script crossorigin src="https://unpkg.com/react-dom@18/umd/react-dom.development.js"></script>
  <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>
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
        <h3>Wagen</h3>
        <ul id="cartItems"></ul>
        <div id="cartTotal">Total: €0.00</div>
        <button id="checkoutBtn">afrekenen</button>
      </div>
    </div>
    <section class="menu-container">

      <?php

      $menu_by_type = [];
      foreach ($menu_items as $item) {
        $type = $item['type'];
        if (!isset($menu_by_type[$type])) {
          $menu_by_type[$type] = [];
        }
        $menu_by_type[$type][] = $item;
      }


      $section_order = ['Pizza', 'drinks', 'Dessert', 'Aperitivo', 'Unknown'];
      foreach ($section_order as $section_name) {
        if (!isset($menu_by_type[$section_name])) {
          continue;
        }
      ?>
        <div class="menu-section" id="scrolbar">
          <h2 class="menu-title" data-text="<?php echo $section_name == 'drinks' ? '🥤 Drinks' : ($section_name == 'Pizza' ? '🍕 Pizzas' : ($section_name == 'Dessert' ? '🍰 Desserts' : ($section_name == 'Aperitivo' ? '🍽️ Appetizers' : $section_name))); ?>">
            <?php
            echo $section_name == 'drinks' ? '🥤 Drinks' : ($section_name == 'Pizza' ? '🍕 Pizzas' : ($section_name == 'Dessert' ? '🍰 Desserts' : ($section_name == 'Aperitivo' ? '🍽️ Appetizers' : $section_name)));
            ?>
          </h2>
          <div class="menu-items">
            <?php foreach ($menu_by_type[$section_name] as $item): ?>
              <div class="menu-item">
                <h3><?php echo htmlspecialchars($item['naam']); ?></h3>
                <p><?php echo htmlspecialchars($item['omschrijving'] ?: ''); ?></p>
                <div class="menu-meta">
                  <span class="price">€<?php echo number_format(floatval($item['price']), 2); ?></span>
                  <button class="add-to-cart" data-name="<?php echo htmlspecialchars($item['naam']); ?>" data-price="<?php echo floatval($item['price']); ?>"><?php echo $add; ?></button>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      <?php
      }
      ?>
    </section>
  </section>
  <footer>
    <p class="dancing">&copy; 2026 <?php echo $Restaurant_name; ?>. All rights reserved.</p>
  </footer>



  <script type="text/babel">
    const MenuTitle = ({ text }) => {
      const [hovered, setHovered] = React.useState(false);
      const style = {
        transition: 'transform 0.3s ease',
        transform: hovered ? 'scale(1.1) rotate(5deg)' : 'scale(1) rotate(0deg)',
        display: 'inline-block',
        cursor: 'pointer'
      };
      return React.createEl1ement('span', {
        style,
        onMouseEnter: () => setHovered(true),
        onMouseLeave: () => setHovered(false)
      }, text);
    };

    document.addEventListener('DOMContentLoaded', () => {
      document.querySelectorAll('.menu-title').forEach(el => {
        const text = el.getAttribute('data-text');
        ReactDOM.render(React.createElement(MenuTitle, { text }), el);
      });
    });
  </script>
  <script src="cart.js"></script>
</body>

</html>
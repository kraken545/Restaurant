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
        <h3>Wagen</h3>
        <ul id="cartItems"></ul>
        <div id="cartTotal">Total: €0.00</div>
        <button id="checkoutBtn">afrekenen</button>
      </div>
    </div>
    <section class="menu-container">

      <?php

      // Haal alle unieke categorieën op vanuit de database (geen vaste lijst)
      $categories = [];
      foreach ($menu_items as $item) {
        $cat = $item['type'];
        if (!in_array($cat, $categories)) {
          $categories[] = $cat;
        }
      }

      // Loop door elke categorie en filter de items
      foreach ($categories as $categorie) {
      ?>
        <div class="menu-section" id="scrolbar">
          <h2 class="menu-title" data-text="<?php echo htmlspecialchars($categorie); ?>">
            <?php echo htmlspecialchars($categorie); ?>
          </h2>
          <div class="menu-items">
            <?php foreach ($menu_items as $item){ ?>
              <?php if ($item['type'] == $categorie){ ?>
                <div class="menu-item">
                  <h3><?php echo htmlspecialchars($item['naam']); ?></h3>
                  <p><?php echo htmlspecialchars($item['omschrijving'] ?: ''); ?></p>
                  <div class="menu-meta">
                    <span class="price">€<?php echo number_format(floatval($item['price']), 2); ?></span>
                    <button class="add-to-cart"
                      data-name="<?php echo htmlspecialchars($item['naam']); ?>"
                      data-price="<?php echo floatval($item['price']); ?>">
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

  <!-- CHATBOT SECTION - ABAJO A LA DERECHA
  <div class="chatbot-container">
    <div class="chatbot-toggle" id="chatbotToggle">
      <span class="chatbot-icon">🤖</span>
      <span class="chatbot-text">Ayuda IA</span>
    </div>
    
    <div class="chatbot-window" id="chatbotWindow">
      <div class="chatbot-header">
        <h3>Asistente IA del Restaurante</h3>
        <button class="chatbot-close" id="chatbotClose">&times;</button>
      </div>
      
      <div class="chatbot-messages" id="chatbotMessages">
        <div class="message bot-message">
          <div class="message-avatar">🤖</div>
          <div class="message-content">
            ¡Hola! Soy tu asistente IA. Puedo ayudarte con información sobre nuestros platos, recomendaciones y preguntas sobre el menú. ¿En qué puedo ayudarte?
          </div>
        </div>
      </div>
      
      <div class="chatbot-input-area">
        <input type="text" id="chatbotInput" placeholder="Escribe tu mensaje..." maxlength="200">
        <button id="chatbotSend" class="chatbot-send-btn">
          <span class="send-icon">📤</span>
        </button>
      </div>
    </div>
  </div> -->

  
  <script src="cart.js"></script>
  <!-- <script src="chatbot.js"></script> -->
</body>

</html>
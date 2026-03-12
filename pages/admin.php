<?php

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pizzeria Latina - Admin</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <nav>
        <div class="logo"><a href="../index.php">Pizzeria Latina</a></div>
        <ul>
            <li><a href="menu.php">Menu</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="club.php">Club</a></li>
            <li class="login-item"><a href="../index.php">Logout</a></li>
        </ul>
    </nav>

    <section class="admin-section">
        <div class="admin-card">
            <h1>Admin Panel</h1>


            <div class="product-box">
                <form action="post"></form>
            </div>
            <!-- <div class="product-box"></div>
            <div class="product-box"></div>
            <div class="product-box"></div>
            <div class="product-box"></div>
            <div class="product-box"></div>
            <div class="product-box"></div>
            <div class="product-box"></div>
            <div class="product-box"></div>
            <div class="product-box"></div>
            <div class="product-box"></div>
            <div class="product-box"></div> -->

            <!-- <div class="admin-actions">
                <button type="button">Product Bekijken</button>
                <button type="button">Add Product</button>
                <button type="button">Product Bewerken</button>
                <button type="button">Product Verwijderen</button>
                
            </div> -->


            <!-- <div class="admin-box">
                <h2>New Product</h2>
                <form action="" method="post">
                    <input type="text" name="name" placeholder="Product Name" required />
                    <input type="number" name="price" step="0.25" placeholder="Price (€)" required />
                    <input type="text" name="description" placeholder="Description" required />
                    <button type="submit">Save</button>
                </form>
            </div> -->
        </div>
    </section>

    <footer>
        <p class="dancing">&copy; 2026 Pizzeria Latina. All rights reserved.</p>
    </footer>

</body>

</html>
<?php include('data.php');
include('../dbcalls/db_connection.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $Restaurant_name; ?> - Club</title>
    <link rel="stylesheet" href="../pages/style.css" />
</head>

<body>
    <nav>
        <div class="logo"><a href="index.php">Pizzeria Latina</a></div>
        <ul>

            <li><a href="menu.php">Menu</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="club.php">Club</a></li>
            <li class="login-item"><a href="admin.php">Login Admin</a></li>
        </ul>
    </nav>
    <section class="sec-club">
        <div class="about-content">
            <div class="about-window">
                <h2 class="dancing groter">Join Club Pizzeria Latina</h2>
                <form action="../dbcalls/create.php" method="post">
                    <label for="naam">Naam*</label>
                    <input type="text" id="naam" name="naam" placeholder="Voornaam Achternaam" required>

                    <label for="adres">Adres*</label>
                    <input type="text" id="adres" name="adres" placeholder="Straatnaam 123" required>

                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="example@email.com">

                    <label for="telefoon">Telefoonnummer*</label>
                    <input type="tel" id="telefoon" name="telefoon" placeholder="06-12345678" required>

                    <button type="submit">Registreren</button>
                </form>
            </div>
        </div>
    </section>
</body>
<footer>
    <p class="dancing">&copy; 2026 <?php echo $Restaurant_name; ?>. All rights reserved.</p>
</footer>



<script src="cart.js"></script>

</html>
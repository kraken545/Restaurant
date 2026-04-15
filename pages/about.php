<?php
include('data.php');
include('../dbcalls/db_connection.php');
$reservationSuccess = isset($_GET['success']) && $_GET['success'] === '1';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $restaurantName; ?> - About</title>
    <link rel="stylesheet" href="../pages/style.css" />
</head>

<body class="bckabout">
    <nav>
        <div class="logo"><a href="../index.php">Pizzeria Latina</a></div>
        <ul>

            <li><a href="menu.php">Menu</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="club.php">Club</a></li>
            <li class="login-item"><a href="reservering_admin.php">Admin Reserving</a></li>

        </ul>
    </nav>
    <add-button></add-button>

    <section class="main-content">
        
            <div class="form-window reservation-window">
                <?php if ($reservationSuccess) { ?>
                    <div class="success-box">Reservering verzonden. We nemen binnenkort contact met je op.</div>
                <?php } ?>
                <h1 class="dancing">Reserveer je tafel</h1>
                <h3 class="roboto">Vul het formulier in en verzeker je van een heerlijke avond.</h3>
                <form action="../reservation/create_reservation.php" method="post">
                    <input type="text" name="name" placeholder="Naam" required />
                    <input type="tel" name="phone" placeholder="Telefoon" required />
                    <input type="date" name="date" required />
                    <input type="number" name="qnty" placeholder="Personen" min="1" value="2" required />
                    <input type="hidden" name="redirect" value="about" />
                    <button type="submit">Reserveer nu</button>
                </form>
           

           
                <h1 class="dancing">About Us</h1>
                <h3 class="roboto">Welkom bij onze pizzeria! Geniet van warme Italiaanse smaken in een gezellige sfeer.</h3>

                <h2 class="dancing">Contact Information</h2>
                <div class="contact-list">
                    <p class="roboto"><strong>Address:</strong> <?php echo $address; ?></p>
                    <p class="roboto"><strong>Phone:</strong> <?php echo $phoneNumber; ?></p>
                    <p class="roboto"><strong>Opening Hours:</strong> <?php echo $openingHours; ?></p>
                </div>
            </div>
        
    </section>


    <footer>
        <p class="dancing">&copy; 2026 <?php echo $restaurantName; ?>. All rights reserved.</p>
    </footer>



    <script src="../pages/cart.js"></script>
</body>
<script src="../component/component1.js"></script>

</html>
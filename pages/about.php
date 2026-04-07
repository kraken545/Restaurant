<?php include('data.php');
include('../dbcalls/db_connection.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $Restaurant_name; ?> - About</title>
    <link rel="stylesheet" href="../pages/style.css" />
</head>

<body class="bckabout">
    <nav>
        <div class="logo"><a href="../index.php">Pizzeria Latina</a></div>
        <ul>

            <li><a href="menu.php">Menu</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="club.php">Club</a></li>

        </ul>
    </nav>
    <add-button></add-button>

    <section class="main-content">
        <div class="form-content">
            <div class="form-window">
                <h1 class="dancing">About Us</h1>
                <h3 class="roboto">Welcome to our pizzeria! We serve delicious Italian cuisine in a warm atmosphere.</h3>

                <h2 class="dancing">Contact Information</h2>
                <ul>
                    <p class="roboto" > <strong>Address:</strong> <?php echo $address; ?> </p>
                    <p class="roboto"> <strong>Phone:</strong> <?php echo $phoneNumber; ?></p>
                    <p class="roboto"><strong>Opening Hours:</strong> <?php echo $openingHours; ?></p>
                </ul>
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
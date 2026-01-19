<?php include('data.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $Restaurant_name; ?> - About</title>
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

    <section class="main-content">
        <div class="about-window">
            <h1>About <?php echo $Restaurant_name; ?></h1>
            <p>Welcome to our pizzeria! We serve delicious Italian cuisine in a warm atmosphere.</p>

            <h2>Contact Information</h2>
            <ul>
                <p> <strong>Address:</strong> <?php echo $Address; ?> </p>
                <p> <strong>Phone:</strong> <?php echo $Phone_number; ?></p>
                <p><strong>Opening Hours:</strong> <?php echo $Opening_hours; ?></p>
            </ul>
        </div>
    </section>

    <footer>
        <p>&copy; 2026 <?php echo $Restaurant_name; ?>. All rights reserved.</p>
    </footer>

    <script src="anim.js"></script>
</body>

</html>
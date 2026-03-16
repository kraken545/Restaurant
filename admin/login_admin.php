<?php


?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link rel="stylesheet" href="../pages/style.css" />
</head>
<nav>
    <div class="logo"><a href="../index.php">Pizzeria Latina</a></div>
</nav>

<body class="blur-login">

    <section class="form-content">
        <div class="login-window">
            <h2>Login</h2>
            <form action="login_admin_process.php" method="post">
                <input type="text" name="username" placeholder="User" required />
                <input type="password" name="password" placeholder="Password" required />
                <button type="submit">Login</button>
            </form>

        </div>
    </section>

    <footer>

    </footer>
</body>

</html>
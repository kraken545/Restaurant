<?php
// Si ya está logueado, ir directo al admin
session_start();
if (isset($_SESSION['admin_username'])) {
    header('Location: ../pages/admin.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link rel="stylesheet" href="../pages/style.css" />
</head>

<body class="blur-login">
    <nav>
        <div class="logo"><a href="../index.php">Pizzeria Latina</a></div>
    </nav>

    <section class="form-content">
        <div class="login-window">
            <h2>Login</h2>

            <?php if (isset($_GET['error'])): ?>
                <p style="color: #ff4444; margin-bottom: 1em; text-align: center;">
                    <?php echo htmlspecialchars($_GET['error']); ?>
                </p>
            <?php endif; ?>

            <form action="login_admin_process.php" method="post">
                <input type="text" name="username" placeholder="User" required />
                <input type="password" name="password" placeholder="Password" required />
                <button type="submit">Login</button>
            </form>
        </div>
    </section>

    <footer>
        <p class="dancing">&copy; 2026 Pizzeria Latina. All rights reserved.</p>
    </footer>
</body>

</html>
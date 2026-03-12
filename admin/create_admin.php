<?php

session_start();
include('../dbcalls/db_connection.php');

// Solo admins logueados pueden crear otro admin
if (!isset($_SESSION['admin_username'])) {
    header('Location: login_admin.php');
    exit;
}

$success = '';
$error = '';

$username = trim($_POST['username'] ?? '');
$password = $_POST['password'] ?? '';

if ($username === '' || $password === '') {
    $error = 'username and password required';
} else {
    // Verificar si el usuario ya existe
    $verify = 'SELECT id FROM admin WHERE username = :username LIMIT 1';
    $stmt = $conn->prepare($verify);
    $stmt->bindParam(':username', $username);
    $stmt->execute();

    if ($stmt->fetch(PDO::FETCH_ASSOC)) {
        $error = 'El usuario ya existe.';
    } else {
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $insert = 'INSERT INTO admin (username, password) VALUES (:username, :password)';
        $stmt = $conn->prepare($insert);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $hash);
        $stmt->execute();
        $success = 'Administrador creado correctamente.';
    }
}


?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Crear Admin</title>
    <link rel="stylesheet" href="../pages/style.css" />
</head>

<body>
    <nav>
        <div class="logo"><a href="../index.php">Pizzeria Latina</a></div>
        <ul>
            <li><a href="../pages/menu.php">Menu</a></li>
            <li><a href="../pages/about.php">About</a></li>
            <li><a href="../pages/club.php">Club</a></li>
            <li class="login-item"><a href="login_admin.php">Login Admin</a></li>
        </ul>
    </nav>

    <section class="form-content">
        <div class="form-window">
            <h1>Crear administrador</h1>

            <?php if ($success): ?>
                <p style="color:#00ec59; margin-bottom:1em;"><?php echo $success; ?></p>
            <?php endif; ?>

            <?php if ($error): ?>
                <p style="color:red; margin-bottom:1em;"><?php echo $error; ?></p>
            <?php endif; ?>

            <form method="post" action="create_admin.php">
                <input type="text" name="username" placeholder="Usuario" required />
                <input type="password" name="password" placeholder="Contraseña" required />
                <button type="submit">Guardar nuevo admin</button>
            </form>
        </div>
    </section>

    <footer>
        <p class="dancing">&copy; 2026 Pizzeria Latina. All rights reserved.</p>
    </footer>
</body>

</html>
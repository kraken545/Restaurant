<?php
include('db_connection.php');

// Ejemplo: crear un usuario administrador desde formulario o phpMyAdmin.
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = trim($_POST['password'] ?? '');

    if ($username === '' || $password === '') {
        echo 'Usuario y contraseña son obligatorios.';
        exit;
    }

    $hash = password_hash($password, PASSWORD_DEFAULT);

    $sql = 'INSERT INTO admin_users (username, password) VALUES (:username, :password)';
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $hash);

    try {
        $stmt->execute();
        echo 'Administrador creado correctamente.';
    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }
} else {
    ?>
    <form method="post" action="create_admin.php">
        <label>Usuario:</label><br>
        <input type="text" name="username" required><br>
        <label>Contraseña:</label><br>
        <input type="password" name="password" required><br><br>
        <button type="submit">Crear administrador</button>
    </form>
    <?php
}

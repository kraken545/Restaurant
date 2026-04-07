<?php
include('../dbcalls/db_connection.php');
session_start();

// ─── Recibir datos del formulario ───
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

// ─── Validar que no estén vacíos ───
if ($username == '' || $password == '') {
    header('Location: login_admin.php?error=username+and+password+required');
    exit;
}

// ─── Buscar el usuario en la tabla admin ───
$sql = 'SELECT id, username, password FROM admin WHERE username = :username LIMIT 1';
$stmt = $conn->prepare($sql);
$stmt->bindParam(':username', $username);
$stmt->execute();
$user = $stmt->fetch();

// ─── Si no existe el usuario ───
if (!$user) {
    header('Location: login_admin.php?error=user+not+found');
    exit;
}

// ─── Verificar la contraseña ───
$storedPassword = $user['password'];


if (password_verify($password, $storedPassword) || $password === $storedPassword)
 {
    // Contraseña correcta → guardar sesión y redirigir al admin
    $_SESSION['admin_username'] = $user['username'];
    header('Location: ../pages/admin.php');
    exit;
} else {
    // Contraseña incorrecta
    header('Location: login_admin.php?error=wrong+password');
    exit;
}

<?php

include('../dbcalls/db_connection.php');



$username = $_POST['username'];
$password = $_POST['password'];

if ($username == '' || $password == '') {
    header('Location: login_admin.php?error=username+and+password+required');
    exit;
}

$sql = 'SELECT id, username, password FROM admin WHERE username = :username LIMIT 1';
$stmt = $conn->prepare($sql);
$stmt->bindParam(':username', $username);
$stmt->execute();
$user = $stmt->fetch();

if (!$user) {
    header('Location: login_admin.php?error=user+not+found');
    exit;
}

$storedPassword = $user['password'];

// Soporta hash de password y también texto plano (para compatibilidad con registros antiguos)
if (password_verify($password, $storedPassword) || $password == $storedPassword) {
    $_SESSION['admin_username'] = $user['username'];
    header('Location: ../pages/admin.php');
    exit;
}

header('Location: login_admin.php?error=invalid+credentials');
exit;

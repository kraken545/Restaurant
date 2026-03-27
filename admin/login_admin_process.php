<?php
include('../dbcalls/db_connection.php');
session_start();

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


if (password_verify($password, $storedPassword) || $password == $storedPassword) {
    $_SESSION['admin_username'] = $user['username'];
    header('Location: ../pages/admin.php');
    
   
    exit;
}
if(isset($_POST["login"])){
    
    if(!empty($_POST["username"]) && !empty($_POST["password"])){
        $_SESSION["usernam"] = $_POST["username"];
        $_SESSION["password"] = $_POST['password'];



        header("Location: admin.php");
    }  
}

exit;

<?php
session_start();
include "conn.php";

if (isset($_POST['submit'])) {
    if ($stmt = $conn->prepare("SELECT * FROM admin WHERE username = ?")) {
        $stmt->bind_param('s', $_POST['username']);
        $stmt->execute();
        $stmt->store_result();
        
        if ($stmt->num_rows === 1) {

            $stmt->bind_result($id, $email, $username, $password);
            $stmt->fetch();
            if ($_POST['password']===$password) {
                $_SESSION['login'] = true;
                $_SESSION['username'] = $username;
                $_SESSION['email'] = $email;
                header("location: ../pages/home.php");
            } else {
                header("location: ../pages/login.php?msg=Incorrect password");
            }
        } else {
            header("location: ../pages/login.php?msg=Incorrect credential");
            exit();
        }
        $stmt->close();
    }
}

<?php
$email = $_POST['email'];
$password = $_POST['password'];

if ($email == "admin@example.com" && $password == "admin123") {
    echo "Login sukses!";
} else {
    echo "Email atau password salah.";
}
?>

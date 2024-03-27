<?php
$email = $_POST["email"];
$password = $_POST["password"];

if ($email == "ahfauzii45@gmail.com" && $password == "123456") {
    header("location:dashboard.php");
} else {
    echo "Email atau Password Tidak Valid";
}
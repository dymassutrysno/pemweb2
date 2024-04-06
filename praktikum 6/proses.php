<?php
$email = $_POST["email"];
$password = $_POST["password"];

if ($email == "dymassutrysno@gmail.com" && $password == "12345") {
    header("location:dahsboard.php");
} else {
    echo "Email atau Password Tidak Valid";
}

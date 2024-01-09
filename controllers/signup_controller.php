<?php
if (isset($_POST['submit'])) {

    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    user::insert($firstName, $lastName, $password, $email);
    header("location:index.php?page=signin");
}

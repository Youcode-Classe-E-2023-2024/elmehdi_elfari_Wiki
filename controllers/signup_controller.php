<?php
$user = new User('users');
if (isset($_POST['submit'])) {

    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    $signupModel = new SignupModel($user);
    $signupModel->insertModel($firstName, $lastName, $password, $email);
    header("location:index.php?page=signin");
}

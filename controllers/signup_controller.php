<?php
$user = new User('users');
if (isset($_POST['submit'])) {

    $firstName = htmlspecialchars($_POST['firstname'], ENT_QUOTES);
    $lastName = htmlspecialchars($_POST['lastname'], ENT_QUOTES);
    $password = htmlspecialchars($_POST['password'], ENT_QUOTES);
    $email = htmlspecialchars($_POST['email'], ENT_QUOTES);
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);

    $signupModel = new SignupModel($user);
    $signupModel->insertModel($firstName, $lastName, $password, $email);
    header("location:index.php?page=signin");
}

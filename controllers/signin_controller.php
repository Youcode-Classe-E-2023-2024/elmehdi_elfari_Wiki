<?php
$unsuccessfulmsg = '';
$user = new User('users');

if (isset($_POST['submit'])) {


    $email = htmlspecialchars(trim(strtolower($_POST['email'])));
    $password = htmlspecialchars(trim(strtolower($_POST['password'])));

    if (empty($email)) {
        $emailmsg = 'Enter an email.';
    } else {
        $emailmsg = '';
    }

    if (empty($password)) {
        $passmsg = 'Enter your password.';
    } else {
        $passmsg = '';
    }

    $signinModel = new SigninModel($user);

    $logged = $signinModel->signinModel($password, $email);

    if ($logged === true) {
        $isAdmin = $signinModel->isEmailAdminModel($email);
        if ($isAdmin) {
            header("Location: index.php?page=dashboard");
            exit;
        } else {
            header("Location: index.php?page=home");
            exit;
        }
    } elseif ($logged === 0) {
        header("Location: index.php?page=signin&error=passwordwrong");
        exit;
    } elseif ($logged === null) {
        header("Location: index.php?page=signin&error=emaildoesntexist");
        exit;
    }
}

<?php
$unsuccessfulmsg = '';

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

    $logged = user::signin($password, $email);

    if ($logged === true) {
        header("Location: index.php?page=dashboard");
        exit;
    } elseif ($logged === 0) {
        header("Location: index.php?page=signin&error=passwordwrong");
        exit;
    } elseif ($logged === null) {
        header("Location: index.php?page=signin&error=emaildoesntexist");
        exit;
    }
}

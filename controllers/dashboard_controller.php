<?php
$artcile = new Article('articles');

if (isset($_SESSION['user_id'])) {
    $user = new User('users');
    if (!$user->isEmailAdmin($_SESSION['email'])) {
        header('Location: index.php?page=signin');
        die();
    }
    $totalUsers = $user->countAllUsers();
    $totalAdmins = $user->countAllAdminUsers();
    $totalAuthors = $user->countAllAuthorUsers();
    $dashboardModel = new dashboardModel($artcile);
    $totalArticles = $dashboardModel->getAllArticles();
    $articles = $dashboardModel->getArticles();
} else {
    header('Location: index.php?page=signin');
    die();
}

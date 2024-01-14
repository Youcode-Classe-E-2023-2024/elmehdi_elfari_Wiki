<?php
$article = new Article('articles');

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['articleSubmit'])) {
    extract($_POST);
    $articleModel = new ArticleModel($article);
    $articleModel->insertArticle($title, $content, $tags, $categories);
    header("Location: index.php?wiki");
    exit();
}

if (isset($_SESSION['user_id'])) {
    header('Location: index.php?page=signin');
    die();
}

$articles = $article->getAllArticles();

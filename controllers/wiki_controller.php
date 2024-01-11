<?php
$article = new Article('articles');

$articles = $article->getAllArticles();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['articleDelete'])) {
    extract($_POST);

    $articleModel = new WikiModel($article);
    $articleModel->deleteArticle($articleId);
    header("Location: index.php?addarticle");
    exit();
}
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['articleDelete'])) {
    extract($_POST);

    $articleModel = new WikiModel($articleId, $title, $content, $tags, $categories);
    $articleModel->updateArticle($articleId, $title, $content, $tags, $categories);
    header("Location: index.php?addarticle");
    exit();
}

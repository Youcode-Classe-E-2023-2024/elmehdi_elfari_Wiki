<?php
$article = new Article('articles');

$articles = $article->getFiveLastArticles();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['articleDelete'])) {
    extract($_POST);

    $articleModel = new WikiModel($article);
    $articleModel->deleteArticle($articleId);
    header("Location: index.php?page=addarticle");
    exit();
}
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['updateArticle'])) {
    extract($_POST);

    $articleModel = new WikiModel($article);
    $articleModel->updateArticle($articleId, $editTitle, $editContent, $editTags, $editCategory);
    header("Location: index.php?page=wiki");
    exit();
}

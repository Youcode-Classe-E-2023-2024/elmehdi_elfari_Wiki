<?php
$article = new Article('articles');

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['articleSubmit'])) {
    extract($_POST);
    $articleModel = new ArticleModel($article);
    $articleModel->insertArticle($title, $content, $tags, $categories);
    header("Location: index.php?wiki");
    exit();
}

$articles = $article->getAllArticles();

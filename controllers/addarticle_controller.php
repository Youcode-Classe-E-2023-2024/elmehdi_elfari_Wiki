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


if ($articles) {
    foreach ($articles as $article) {
        $affiche = "<h2>" . $article['article_title'] . "</h2>";
        $affiche = "<p>" . $article['article_content'] . "</p>";
        $affiche = "<p>Tags: " . $article['article_tags'] . "</p>";
        $affiche = "<p>Category: " . $article['article_categorie'] . "</p>";
        "<hr>";
    }
} else {
    echo "No articles found.";
}

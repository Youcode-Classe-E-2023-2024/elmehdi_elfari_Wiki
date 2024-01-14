<?php

$categorie = new Categorie('categories');
$categoriemodel = new CategorieModel($categorie);
// $tag->insert($tag_name);

$categories = $categoriemodel->getcategorie();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['categorie_name'])) {
    extract($_POST);
    $tagModel = new CategorieModel($categorie);
    $tagModel->insert($categorie_name);
    header("Location: index.php?categories");
    exit();
}
// if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['articleDelete'])) {
//     extract($_POST);

//     $articleModel = new WikiModel($article);
//     $articleModel->deleteArticle($articleId);
//     header("Location: index.php?addarticle");
//     exit();
// }

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['categorieDelete'])) {
    extract($_POST);

    $categorieModel = new CategorieModel($categorie);
    $categorieModel->deleteCategorie($categorieId);
    header("Location: index.php?categories");
    exit();
}
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['updateCategorie'])) {
    extract($_POST);

    $categorieModel = new CategorieModel($categorie);
    $categorieModel->updateCategorie($categorieId, $categorie_name);
    header("Location: index.php?page=categories");
    exit();
}

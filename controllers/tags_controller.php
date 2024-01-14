<?php

$tag = new Tag('tags');
$tagmodel = new TagModel($tag);

$tags = $tagmodel->gettag();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['tag_name'])) {
    extract($_POST);
    $tagModel = new TagModel($tag);
    $tagModel->insert($tag_name);
    header("Location: index.php?tag");
    exit();
}
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['tagDelete'])) {
    extract($_POST);

    $tagModel = new TagModel($tag);
    $tagModel->deleteTags($tagId);
    header("Location: index.php?tags");
    exit();
}
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['updateTag'])) {
    extract($_POST);

    $tagModel = new TagModel($tag);
    $tagModel->updateTags($tagId, $tag_name);
    header("Location: index.php?page=tags");
    exit();
}

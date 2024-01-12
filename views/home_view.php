<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Home Page</title>
    <style>
        .card-content {
            display: none;
        }

        .contentCard {
            margin: auto;
        }
    </style>
</head>

<body>
    <nav class="navigation">
        <ul>
            <li><a class="list" href="index.php?page=home">Home</a></li>
            <li><a class="list" href="index.php?page=wiki">Wiki</a></li>
            <li><a class="list" href="index.php?page=signup">Sign Up</a></li>
            <li><a class="list" href="index.php?page=signin">Sign In</a></li>
            <li><a class="list" href="logout.php">Logout</a></li>

        </ul>
    </nav>

    <main>
        <div class="content-brief">
            <h2>Content Brief</h2>
            <p>Add a brief description or definition of the content here.</p>

        </div>
        <div class="row mt-4 container contentCard">
            <?php foreach ($articles as $article) : ?>
                <div class="col-md-4 mb-3 ">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title"><?= $article['article_title']; ?></h3>
                            <p class="card-text"><strong>Tags:</strong> <?= $article['article_tags']; ?></p>
                            <p class="card-text"><strong>Categorie:</strong> <?= $article['article_categorie']; ?></p>
                            <div class="card-content">
                                <h6 class="card-subtitle mb-2 text-muted"><?= $article['article_content']; ?></h6>

                                <p class="card-text"><small class="text-muted">Created: <?= $article['create_at']; ?></small></p>
                            </div>
                            <div class="modal fade" id="editModal<?= $article['article_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="editModalLabel<?= $article['article_id']; ?>" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editModalLabel<?= $article['article_id']; ?>">Modifier l'article</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="index.php?page=wiki" method="post">
                                                <div class="form-group">
                                                    <label for="editTitle">Title:</label>
                                                    <input type="text" class="form-control" id="editTitle" name="editTitle" value="<?= $article['article_title']; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="editContent">Content:</label>
                                                    <textarea class="form-control" id="editContent" name="editContent"><?= $article['article_content']; ?></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="editTags">Tags:</label>
                                                    <input type="text" class="form-control" id="editTags" name="editTags" value="<?= $article['article_tags']; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="editCategory">Category:</label>
                                                    <input type="text" class="form-control" id="editCategory" name="editCategory" value="<?= $article['article_categorie']; ?>">
                                                </div>
                                                <input type="hidden" name="articleId" value="<?= $article['article_id']; ?>">
                                                <input type="hidden" name="modificationDate" value="<?= date('Y-m-d H:i:s'); ?>">
                                                <button type="submit" name="updateArticle" class="btn btn-primary">Save Changes</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- "Supprimer" button -->
                            <form action="index.php?page=home" method="post">
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#editModal<?= $article['article_id']; ?>">
                                    Modifier
                                </button>
                                <input type="hidden" name="editId" value="<?= $article['article_id']; ?>">


                                <button type="submit" name="articleDelete" class="btn btn-danger">Supprimer</button>
                                <input type="hidden" name="articleId" value="<?= $article['article_id']; ?>">
                            </form>
                        </div>
                        <button class="btn btn-link btn-toggle-content" onclick="toggleContent(this)">Toggle Content</button>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
        <script>
            function toggleContent(button) {
                const card = button.closest('.card');
                const content = card.querySelector('.card-content');
                content.style.display = (content.style.display === 'none') ? 'block' : 'none';
            }
        </script>
    </main>
</body>

</html>
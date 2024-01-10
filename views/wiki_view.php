<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Home Page</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <nav>
        <ul>
            <li><a class="list" href="index.php?page=home">Home</a></li>
            <li><a class="list" href="index.php?page=wiki">Wiki</a></li>
            <li><a class="list" href="index.php?page=signup">Sign Up</a></li>
            <li><a class="list" href="index.php?page=signin">Sign In</a></li>
        </ul>
    </nav>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6 search-form">
                <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
            <div class="col-md-6 text-right">
                <a href="index.php?page=signup" class="btn btn-outline-success mr-2">Sign Up</a>
                <a href="index.php?page=signin" class="btn btn-outline-primary">Sign In</a>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-12 text-right">
                <a href="index.php?page=addarticle" class="btn btn-primary">Add New Article</a>
            </div>
        </div>
        <div class="row mt-4">
            <div class="article">
                <h3>Article 1 Title</h3>
                <p>Content of Article 1...</p>
            </div>
            <div class="article">
                <h3>Article 2 Title</h3>
                <p>Content of Article 2...</p>
            </div>
            <div class="article">
                <h3>Article 3 Title</h3>
                <p>Content of Article 3...</p>
            </div>
            <div class="article">
                <h3>Article 4 Title</h3>
                <p>Content of Article 4...</p>
            </div>
            <div class="article">
                <h3>Article 5 Title</h3>
                <p>Content of Article 5...</p>
            </div>
        </div>
    </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>
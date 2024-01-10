<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Dashboard</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li><a class="list" href="index.php?page=home">Home</a></li>
                <li><a class="list" href="index.php?page=wiki">Wiki</a></li>
                <li><a class="list" href="index.php?page=signup">Sign Up</a></li>
                <li><a class="list" href="index.php?page=signin">Sign In</a></li>
            </ul>
        </div>
    </nav>

    <aside class="sidebar">
        <div class="list-group">
            <button type="button" class="list-group-item list-group-item-action">Manage Articles</button>
            <button type="button" class="list-group-item list-group-item-action">Manage Categories</button>
            <button type="button" class="list-group-item list-group-item-action">Manage Tags</button>
        </div>
    </aside>


    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
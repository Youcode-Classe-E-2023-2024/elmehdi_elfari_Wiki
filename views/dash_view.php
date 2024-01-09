<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>h2Mini Wiki</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Your Custom CSS -->
    <style>
        /* Sidebar style */
        .sidebar {
            height: 100vh;
            background-color: #f8f9fa;
            border-right: 1px solid #dee2e6;
        }

        .sidebar h1 {
            color: #007bff;
            margin-left: 3rem;
            /* Blue color for sidebar headers */
        }

        .list-group-item {
            cursor: pointer;
            background-color: #f8f9fa;
            border: none;
            margin-left: 2rem;
        }


        .list-group-item:hover {
            background-color: gray;
            /* Light gray on hover */
        }

        /* Content area style */
        .content {
            padding-top: 20px;
        }

        .article-title {
            color: #dc3545;
            /* Red color for article titles */
        }

        .article-content {
            color: #6c757d;
            /* Dark gray for article content */
        }

        /* Navigation bar style */
        .navbar {
            background-color: #28a745;
            /* Green color for the navigation bar */
        }

        .navbar-brand {
            color: #fff;
            /* White color for brand text */
        }

        .navbar-form .form-control {
            width: 300px;
        }

        .btn-outline-success {
            color: #28a745;
            border-color: #28a745;
        }

        .btn-outline-success:hover {
            color: #fff;
            background-color: #28a745;
            border-color: #28a745;
        }
    </style>
</head>

<body>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <h3>Mini Wiki</h3>
        </a>
        <!-- Search Bar -->
        <form class="form-inline my-2 my-lg-0 ml-auto">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </nav>

    <div class="container-fluid mt-4">
        <div class="row">

            <!-- Sidebar -->
            <div class="col-md-3 sidebar">
                <!-- Sidebar content goes here -->
                <h1>Sidebar</h1>
                <hr>
                <ul class="list-group">
                    <li class="list-group-item">Category 1</li>
                    <li class="list-group-item">Category 2</li>
                    <li class="list-group-item">Category 3</li>
                    <!-- Add more sidebar items here -->
                </ul>
            </div>

            <!-- Content Area -->
            <div class="col-md-9 content">
                <!-- Article Title and Content -->
                <div>
                    <h2 class="article-title">Article Title</h2>
                    <p class="article-content">This is the content of the article.</p>
                </div>
                <!-- Add more article content here -->
            </div>

        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
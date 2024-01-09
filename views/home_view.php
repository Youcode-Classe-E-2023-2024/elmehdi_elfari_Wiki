<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        nav {
            display: flex;
            justify-content: space-between;
            background-color: #f4f4f4;
            padding: 10px;
        }

        nav ul {
            list-style-type: none;
            display: flex;
            gap: 20px;
            margin: 0;
            padding: 0;
            justify-content: flex-end;
            /* Aligns list to the right */
        }

        nav ul li {
            margin: 0;
        }

        .library-image {
            max-width: 800px;
            height: auto;
            display: block;
            margin: 20px auto;
        }

        .navigation {
            height: 2rem;
            background-color: #333;
        }

        .content-brief {
            text-align: center;
            padding: 20px;
            max-width: 600px;
            margin: 0 auto;
        }

        .list {
            text-decoration: none;
            color: white;
        }

        .btn-add-article {
            display: block;
            width: 200px;
            margin: 20px auto;
            padding: 10px;
            text-align: center;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border: none;
            border-radius: 5px;
        }

        .btn-add-article:hover {
            background-color: #45a049;
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
        </ul>
    </nav>

    <main>
        <img class="library-image" src="assets/img/livre_librairie-5fa402100cf61.jpeg" alt="Library Image">
        <div class="content-brief">
            <h2>Content Brief</h2>
            <p>Add a brief description or definition of the content here.</p>

        </div>
    </main>
</body>

</html>
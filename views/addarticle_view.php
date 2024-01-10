<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add Article</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
    <div class="container mt-4">
        <h2>Add New Article</h2>
        <form method="post" action="index.php?page=addarticle">
            <div class="form-group">
                <label for="articleTitle">Title</label>
                <input type="text" name="title" class="form-control" id="articleTitle" placeholder="Enter article title">
            </div>
            <div class="form-group">
                <label for="articleContent">Content</label>
                <textarea class="form-control" name="content" id="articleContent" rows="5" placeholder="Enter article content"></textarea>
            </div>
            <div class="form-group">
                <label for="tags" class="mb-2">Select Tags</label>
                <select class="form-control" id="tags" name="tags" multiple>
                    <option value="Physics">Physics</option>
                    <option value="Biology">Biology</option>
                    <option value="Chemistry">Chemistry</option>
                    <option value="Literature">Literature</option>
                    <option value="Music">Music</option>
                    <option value="Visual Arts">Visual Arts</option>
                    <option value="Film and Cinema">Film and Cinema</option>
                    <option value="Performing Arts">Performing Arts</option>
                    <option value="World History">World History</option>
                    <option value="Sociology">Sociology</option>
                    <option value="Software">Software</option>
                    <option value="Political Science">Political Science</option>
                    <option value="Economics">Economics</option>
                    <option value="Countries">Countries</option>
                    <option value="Medicine">Medicine</option>
                    <option value="Gaming">Gaming</option>
                    <option value="Nutrition">Nutrition</option>
                    <option value="Fitness">Fitness</option>
                    <option value="Religion">Religion</option>
                    <option value="Spirituality">Spirituality</option>
                    <option value="Ecology">Ecology</option>
                    <option value="Ecology">Cooking</option>

                </select>
            </div>
            <div class="form-group">
                <label for="categories" class="mb-2">Select Categories</label>
                <select class="form-control" id="categories" name="categories" multiple>
                    <option value="Technology">Technology</option>
                    <option value="Science">Science</option>
                    <option value="Art">Art</option>
                    <option value="Sports">Sports</option>
                    <option value="History">History</option>

                </select>
            </div>
            <button class="buttonsub" name="articleSubmit" id="buttom">Submit</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="container" style="margin-top:50px">
            <h3 class="text-center">Login System</h3>
            <p class="text-center text-success">
                <?php if (!empty($_SESSION['signupmsg'])) {
                    echo $_SESSION['signupmsg'];
                } ?></p>
        </div>
        <div class="container" style="margin-top:50px">
            <div class="row">
                <div class="col-sm-4">

                </div>
                <div class="col-sm-4">
                    <div class="container bg-light p-4">
                        <p class="text-danger"><?php echo $unsuccessfulmsg ?> </p>
                        <form action="index.php?page=signin" method="POST">
                            <div class="mt-2 pb-2">
                                <label for="email">Email:</label>
                                <input type="email" name="email" class="form-control" placeholder="Enter your email">
                            </div>
                            <div class="mt-1 pb-2">
                                <label for="password">Password:</label>
                                <input type="password" name="password" class="form-control" placeholder="Enter your password">
                                <span class="text-danger"></span>
                            </div>
                            <div class="mt-1 pb-2">
                                <button name="submit" class="btn btn-success">Login</button>
                            </div>
                            <div class="mt-1 pb-2">
                                Not an account? <a href="signup.php" class="text-decoration-none">Sign Up</a>
                            </div>
                    </div>
                </div>
                <div class="col-sm-4">

                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</body>

</html>
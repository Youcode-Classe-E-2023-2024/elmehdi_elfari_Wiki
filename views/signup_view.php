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
            <h3 class="text-center">Registration System</h3>
        </div>
        <div class="container" style="margin-top:50px">
            <div class="row">
                <div class="col-sm-4">

                </div>
                <div class="col-sm-4">
                    <div class="container bg-light p-4">
                        <form action="" method="POST">
                            <div class="mt-2 pb-2">
                                <label for="firstname">First Name:</label>
                                <input type="name" name="firstname" class="form-control" placeholder="Your First Name" value="<?php if (isset($_POST['submit'])) {
                                                                                                                                    echo $firstname;
                                                                                                                                } ?>">
                                <span class="text-danger"><?php if (isset($_POST['submit'])) {
                                                                echo $emptymsg1;
                                                            } ?></span>
                            </div>
                            <div class="mt-2 pb-2">
                                <label for="users_last_name">Last Name:</label>
                                <input type="name" name="lastname" class="form-control" placeholder="Your Last Name" value="<?php if (isset($_POST['submit'])) {
                                                                                                                                echo $lastname;
                                                                                                                            } ?>">
                                <span class="text-danger"><?php if (isset($_POST['submit'])) {
                                                                echo $emptymsg2;
                                                            } ?></span>
                            </div>
                            <div class="mt-2 pb-2">
                                <label for="email">Email:</label>
                                <input type="email" name="email" class="form-control" placeholder="Enter your email" value="<?php if (isset($_POST['submit'])) {
                                                                                                                                echo $email;
                                                                                                                            } ?>">
                                <span class="text-danger"><?php if (isset($_POST['submit'])) {
                                                                echo $emptymsg3;
                                                            } ?></span>
                            </div>
                            <div class="mt-1 pb-2">
                                <label for="password">Password:</label>
                                <input type="password" name="password" class="form-control" placeholder="Enter New password">
                                <span class="text-danger"><?php if (isset($_POST['submit'])) {
                                                                echo $emptymsg4;
                                                            } ?></span>
                            </div>
                            <div class="mt-1 pb-2">
                                <label for="password">Password Again:</label>
                                <input type="password" name="passwordagain" class="form-control" placeholder="Enter password Again">
                                <span class="text-danger"><?php if (isset($_POST['submit'])) {
                                                                echo $emptymsg5 . '' . $pasmatchmsg;
                                                            } ?></span>
                            </div>
                            <div class="mt-1 pb-2">
                                <button name="submit" class="btn btn-success">Sign In</button>
                            </div>
                            <div class="mt-1 pb-2">
                                Alrady have an account? <a href="signin.php" class="text-decoration-none">Login</a>
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
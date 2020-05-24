<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Register</title>
</head>

<body>
    <form method="post">
        <div class="container">
            <div class="inner">
                <div class="header">
                    <h2>Register</h2>
                </div>
                <form action="register.php">
                    <div class="input-group">
                        <label>Username</label>
                        <input type="text" name="username">
                        <span style="color: red"><?= $error_username ?></span><br />
                    </div>
                    <div class="input-group">
                        <label>Email</label>
                        <input type="text" name="email">
                        <span style="color: red"><?= $error_email ?></span><br />
                    </div>
                    <div class="input-group">
                        <label>Password</label>
                        <input type="password" name="password_1">
                        <span style="color: red"><?= $error_password_1 ?></span><br />
                    </div>
                    <div class="input-group">
                        <label>Confirm Password</label>
                        <input type="password" name="password_2">
                        <span style="color: red"><?= $error_password_2 ?></span><br />
                    </div>
                    <div class="input-group">
                        <button type="submit" name="register" class="btn">Register</button>
                    </div>
                    <div>
                        <p>
                            Already member? <a href="login.php">Sign in </a>
                        </p>
                    </div>
                </form>

            </div>

        </div>

    </form>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Register</title>
</head>

<body>
    <div class="header">
        <h2>Login</h2>
    </div>
    <form method="post" action="login.php">
        <div class="input-group">
            <label>Username</label>
            <input type="text" name="username">
        </div>
        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password_1">
        </div>

        <div class="input-group">
        <button type="submit" name="login" class="btn">Login</button>
        </div>

        <div>
            <p>
                Not yet member? <a href="register.php">Sign up </a>
            </p>

        </div>
    </form>

</body>

</html>
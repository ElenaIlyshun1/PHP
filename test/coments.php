<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oбробка форм</title>
</head>

<body>
    <!-- action - де обробляється форма -->
    <form name="test" action="check.php" method="post">
        <label>Name</label></br>
        <input type="text" name="name" placeholder="Name" /> <br />
        <label>Email</label></br>
        <input type="text" name="email" placeholder="Email" /> <br />
        <label>Message</label></br>
        <textarea name="message" cols="40" rows="20"></textarea>
        <br />
        <input type="submit" name="done" value="done" />

    </form>

</body>

</html>
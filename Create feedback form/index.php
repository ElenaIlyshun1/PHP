<?php
session_start();
if (isset($_POST["send"])) {
    print_r($_POST);
    $from = htmlspecialchars($_POST["from"]);
    $to = htmlspecialchars($_POST["to"]);
    $subject = htmlspecialchars($_POST["subject"]);
    $message = htmlspecialchars($_POST["message"]);
    ///зберігає дані що були введені в полях в браузері
    $_SESSION["from"] = $from;
    $_SESSION["to"] = $to;
    $_SESSION["subject"] = $subject;
    $_SESSION["message"] = $message;
    $error_from = "";
    $error_to = "";
    $error_subject = "";
    $error_message = "";
    $error = true;
    if ($from == "" || !preg_match("/@/", $from)) {
        $error_from = "Невірно введений емейл";
        $error = true;
    }
    if ($to == "" || !preg_match("/@/", $to)) {
        $error_to = "Невірно введений емейл";
        $error = true;
    }
    if (strlen($subject) == 0) {
        $error_subject = "Введіть тему повідомлення";
        $error = true;
    }
    if (strlen($message) == 0) {
        $error_message = "Введіть повідомлення";
        $error = true;
    }
    if (!$error) {
        $subject = "=?utf-8?B?" . base64_encode($subject) . "?=";
        //$headers = "From: $from\r\nReply-to: $from\r\nContent-type: text/plain; charset=utf-8\r\n";
        $headers = "From: $from" . "\r\n" .
            "Reply-To: $to" . "\r\n" .
            "X-Mailer: PHP/" . phpversion();
        mail($to, $subject, $message, $headers);
        header("Location: success.php");
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feed back</title>
</head>

<body>
    <h2>Форма зворотнього зв'язку</h2>
    <form name="feedback" action="" method="post">

        <label>Від кого: </label><br />
        <input type="text" name="from" value="<?= $_SESSION["from"] ?>" /><br />
        <span style="color: red"><?= $error_from ?></span><br />
        <label>Кому</label><br />
        <input type="text" name="to" value="<?= $_SESSION["to"] ?>" /><br />
        <span style="color: red"><?= $error_to ?></span><br />
        <label>Тема:</label><br />
        <input type="text" name="subject" value="<?= $_SESSION["subject"] ?>" /><br />
        <span style="color: red"><?= $error_subject ?></span><br />
        <label>Повідомлення</label><br />
        <textarea name="message" cols="40" rows="10"><?= $_SESSION["message"] ?> </textarea><br />
        <span style="color: red"><?= $error_message ?></span><br />
        <input type="submit" name="send" value="Відправити" /> <br />

    </form>
</body>

</html>
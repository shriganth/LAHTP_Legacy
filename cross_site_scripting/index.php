<?php

$comments = "";

if($_SERVER['REQUEST_METHOD'] === "POST") {
    $comments = $_POST['comments'] ?? '';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cross-site Scripting</title>
</head>
<body>
    <form action="" method="POST">
        <label for="comments">Enter your comments: </label>
        <textarea name="comments" id="comments"></textarea><br>
        <input type="submit" id="submit" value="submit">
    </form>

    <p><?php echo $comments; ?></p>  <!--to prevent this from xss-Attacks. Here, we use this syntax. In this syntax "htmlspecialchars" - Avoid the tag which is used in the input "echo htmlspecialchars($comments, ENT_QUOTES, 'UTF-8')" -->
</body>
</html>
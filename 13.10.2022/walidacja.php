<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="post">
        <input type="text" name="url" />
        <input type="submit" value="sprawdź" name="submit"/>
    </form>


    <?php
        $website = $_POST["url"];
        if (preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
            echo "$website to poprawny URL";
        }
        else {
            echo "$website to nie poprawny URL";
        }
    ?>
</body>
</html>
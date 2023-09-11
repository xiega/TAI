<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get">
        <input type="text" name="password"/>
        <input type="submit" value="Chceck"/>
    </form>

    <?php
        $password = $_GET['password'];

        $uppercase = preg_match('@[A-Z]@', $password);
        $lowercase = preg_match('@[a-z]@', $password);
        $number    = preg_match('@[0-9]@', $password);
        $specialChars = preg_match('@[^\w]@', $password);

        if(!$uppercase or !$lowercase or !$number or !$specialChars or strlen($password) < 8) {
            echo 'hasło słabe';
        }
        else{
            echo 'mocarne';
        }
    ?>
</body>
</html>
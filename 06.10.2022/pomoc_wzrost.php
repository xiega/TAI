<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $pole = @$_POST['wzrost'] ;
    
    if($pole>180){
        echo "JESTES WYSOKI";
    }

    elseif($pole > 150 && $pole < 180){
        echo "JESTES SREDNI";
    }

    else {
        echo "JESTES NISKI";
    }

?>

<form action="wzrost.php" method="post">
        <input type="submit" value="cofnij"/>
</form>
</body>
</html>
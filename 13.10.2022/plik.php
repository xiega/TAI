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
        $nameArr = array('Kuba', 'kuba');

        if(isset($_POST['submit'])){
            $imie = $_POST['imie'];

            if(!($imie[-1] == 'a') || in_array($imie, $nameArr)){
                echo 'Jesteś Mężczyzną';
            }
            else{
                echo 'Jesteś Kobietą';
            }
        }
    ?>
    <form action="plik_imie.php" method="post">
        <input type="submit" value="cofnij"/>
</body>
</html>
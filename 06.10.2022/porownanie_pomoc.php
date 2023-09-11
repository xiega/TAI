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
    $data1 = @$_POST['wzrost1'] ;
    $data2 = @$_POST['wzrost2'] ;
    
    if($data1 < $data2){
        echo $data1 . ": jest starszy";
    }

    else {
        echo $data2 . ": jest starszy";
    }

?>

<form action="wzrost.php" method="post">
        <input type="submit" value="cofnij"/>
</form>

</body>
</html>
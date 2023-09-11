<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="plik2.php" method="post">
        <label for="w">Ilość wierszy: </label>
        <select name="wiersz" id="w">
            <option value="5">5</option>
            <option value="10">10</option>
            <option value="15">15</option>
        </select>
        <br>
        <label for="k">Ilość kolumn: </label>
        <select name="kolumna">
            <option value="5">5</option>
            <option value="10">10</option>
            <option value="15">15</option>
        </select>
        <br>
        <label for="kolor">Kolor tła strony: </label>
        <select name="kolor" id="kolor">
            <option value="blue">blue</option>
            <option value="red">red</option>
            <option value="green">green</option>
        </select>
        <br>
        <label for="check">Kolor tła strony: </label>
        <select name="check" id="check">
            <option value=0>parzyste</option>
            <option value=1>nieparzyste</option>
        </select>
        <br>
        <input type="submit" value="Wyslij" name="submit"/>
    </form>
</body>
</html>  
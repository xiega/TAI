<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, tr, td, th {
            border:1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <?php 
        $name = "KOX Pizza";
        $quantity = 1;
        $price = 24.50;

        $name2 = "KEBEBE pizza";
        $quantity2 = 2;
        $price2 = 22;
    ?>

    <h1>Zamówienia</h1>

    <table>
        <tr>
            <th>Nazwa produktu: </th> 
            <th>Ilość: </th> 
            <th>Cena: </th> 
        </tr>
        <?php
            echo "<tr><td>$name</td><td>$quantity</td>
                <td>".number_format($price, 2, ',', ',').
                "</td></tr>";
            echo "<tr><td>$name2</td><td>$quantity2</td>
                <td>".number_format($price2, 2, ',', ','). // 
                "</td></tr>";
        ?>
    </table>


</body>
</html>
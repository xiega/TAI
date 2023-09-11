<?php
    $a = $_POST["dane"];
    $b = $_POST["dane1"];
    $i = "";

    echo "<CENTER>";

    while($a <= $b) {
        echo $a." ";
        $i = $i . $a . " ";
        $a++;
    }

    echo "<br>".strrev($i);

    echo "</CENTER>"
?>
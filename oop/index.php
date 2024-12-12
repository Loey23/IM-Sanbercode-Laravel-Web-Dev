<?php
    require_once("animal.php");
    require_once("ape.php");
    require_once("frog.php");
    echo "<h2>Latihan OOP</h2>";

    $sheep = new Animal("Sheep");
    echo "Name : " . $sheep->nama . "<br>";
    echo "legs : " . $sheep->legs . "<br>";
    echo "cold blooded : " . $sheep->cold_blooded . "<br>";

    $kodok = new Frog("buduk");
    echo "<br>Name : " . $kodok->nama . "<br>";
    echo "legs : " . $kodok->legs . "<br>";
    echo "cold blooded : " . $kodok->cold_blooded . "<br>";
    echo "Jump : " .$kodok->jump() . "<br>";

    $sungokong = new Ape("Kera Sakti");
    echo "<br>Name : " . $sungokong->nama . "<br>";
    echo "legs : " . $sungokong->legs . "<br>"; 
    echo "cold blooded : " . $sungokong->cold_blooded . "<br>";
    echo "Yell : " .$sungokong->yell() . "<br>";

?>
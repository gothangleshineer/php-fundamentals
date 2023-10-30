<?php

// var_dump($_SERVER["REQUEST_METHOD"]);


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = htmlspecialchars($_POST["firstname"]);
    $lastname = htmlspecialchars($_POST["lastname"]);
    $favpet = htmlspecialchars($_POST["favpet"]);

    if (empty($firstname)) {
        exit();
    }

    echo "this data user submit";
    echo "<br>";
    echo $firstname;
    echo "<br>";
    echo $lastname;
    echo "<br>";
    echo $favpet;
}


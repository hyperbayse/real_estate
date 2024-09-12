<?php
    $server = "localhost:3306";
    $user = "root";
    $password = "Engineer@102";
    $db = "realestate";

    try {
        $db_con = new mysqli($server, $user, $password, $db);
    }
    catch (mysqli_sql_exception $e) {
        echo "Connection failed, try again later";
    }
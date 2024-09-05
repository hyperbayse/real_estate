<?php
    $server = "localhost:3306";
    $user = "root";
    $password = "";

    $db_con = new mysqli($server, $user, $password);
    if ($db_con->connect_error)
    {
        die("Connection failed: ".$db_con->connect_error);
    }
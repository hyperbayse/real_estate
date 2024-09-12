<?php
    include $_SERVER['DOCUMENT_ROOT']."/api/db_access.php";

    // Register user into database
    $user_register = $db_con->prepare("INSERT INTO users (first_name, last_name, email, password) VALUES (?, ?, ?, ?)");

    $user_register->bind_param("ssss", $fname, $lname, $email, $passw);

    // Check if user already exists
    $check_user = "SELECT email FROM users WHERE email = '($_POST[email])'";

    $c_email = $db_con->query($check_user);

    echo $c_email;

    if ($c_email == $email) {
        echo "User already exists";
    }
    else {
        $user_register->execute();
        echo "User registered successfully";
    }

    $user_register->close();

<?php
    include $_SERVER['DOCUMENT_ROOT']."/api/db_access.php";

    // Register user into database
    $user_register = $db_con->prepare("INSERT INTO users (first_name, last_name, email, password) VALUES (?, ?, ?, ?)");
    $user_register->bind_param("ssss", $fname, $lname, $email, $passw);

    // Check if user already exists
    $check_user = $db_con->prepare("SELECT DISTINCT email FROM users WHERE email = ?");
    $check_user->bind_param("s", $email);


    $fname = $lname = $email = $passw = $conf_passw = "";
    $error_pass = $existing_user = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fname = htmlspecialchars(trim($_POST['fname']));
        $lname = htmlspecialchars(trim($_POST['lname']));
        $email = htmlspecialchars(trim($_POST['email']));
        $passw = htmlspecialchars(trim($_POST['passw']));
        $conf_passw = htmlspecialchars(trim($_POST['conf_passw']));

        if ($passw != $conf_passw) {
            $error_pass = "Password does not match";
        }
        if (empty($conf_passw)) {
            $error_pass = "Please set a password";
        }
    
        if ($passw == $conf_passw && !empty($conf_passw)) {
            
            $check_user->execute();
            $c_email = $check_user->get_result();

            if ($c_email->num_rows == 0) {
                $user_register->execute();

                $c_email->free();
                $check_user->close();
                $user_register->close();
            }
            else {
                $existing_user = "User already exist";
            }
        }
    }
?>


<!DOCTYPE html>
<html lang="en-US">
    <meta charset="utf-8">
    <meta name="viewport" content='width=device-width', initial-scale=1>
    <title>create_account</title>
    <link rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT']?>/stf/css/account.css">
    <link rel="icon" type="image/x-icon" href="<?php $_SERVER['DOCUMENT_ROOT']?>/stf/img/doc_logo.svg">
<body>

<?php include $_SERVER['DOCUMENT_ROOT']."/ext/head.php"; ?>
    <div id="sign_up">
        
        <h5>Create new account</h5>

        <form method="post" action="<?php $_SERVER['PHP_SELF']?>">
            <div class="reference_pass">
                <p>
                    <label for="fname">First Name:</label> <input id="fname" type="text" name="fname" value="<?php echo $fname; ?>" required>
                </p>
                <p>
                <label for="lname">Last Name:</label><input type="text" name="lname" value="<?php echo $lname; ?>" required>
                </p>
            </div>

            <div class="reference_pass">
                <p>Email address: <input type="email" name="email" value="<?php echo $email; ?>" required>
                <span style="color: red"><?php echo $existing_user; ?></span>
            </p>
            </div>
            
            <div class="log_pass">
            <p>Password: <input type="password" maxlength="30" name="passw" required/></p>
            <p>Confirm password: <input type="password" maxlength="30" name="conf_passw" required/>
                <span style="color: red"><?php echo $error_pass; ?></span>
            </p>
            </div>
            
            <button type="submit" name="submit">Sign up</button>
            <input type="hidden" name="next" value="Next"/>

        </form>
        <p class="note">Already have an account <a href="login.php">Login</a></p>
    </div>


<?php include $_SERVER['DOCUMENT_ROOT']."/ext/base.php" ?>
</body>

</html>
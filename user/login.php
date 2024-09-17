
<!DOCTYPE html>
<html lang="en-US">
    <meta charset="utf-8">
    <meta name="viewport" content='width=device-width', initial-scale=1>
    <title>login</title>
    <link rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT']?>/stf/css/account.css">
    <link rel="icon" type="image/x-icon" href="<?php $_SERVER['DOCUMENT_ROOT']?>/stf/img/doc_logo.svg">
<body>
<?php include $_SERVER['DOCUMENT_ROOT']."/ext/head.php" ?>

<?php include $_SERVER['DOCUMENT_ROOT']."/api/db_access.php" ?>

    <div id="login">
        <h5>Login your account</h5>
        <form method="post" action="">
            <div class="reference_pass">
                <p>
                    <label for="email">Email address: <input type="email" name="email" id="email"></label>
                </p>
                <p>
                    <label for="passw">Password: <input type="password" name="passw" id="passw"></label>
                </p>
            </div>
            
            <button type="submit" name="submit">Login</button>
        </form>
        <p class="note">Forget password <a href="">Click here</a></p>
        <p class="note">You don't have an account <a href="sign_up.php">Sign up</a></p>
    </div>

<?php include $_SERVER['DOCUMENT_ROOT']."/ext/base.php" ?>
</body>
</html>
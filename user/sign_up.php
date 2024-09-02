<!DOCTYPE html>
<html lang="en-US">
    <meta charset="utf-8">
    <meta name="viewport" content='width=device-width', initial-scale=1>
    <title>create_account</title>
    <link rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT']?>/stf/css/account.css">
    <link rel="icon" type="image/x-icon" href="<?php $_SERVER['DOCUMENT_ROOT']?>/stf/img/doc_logo.svg">
<body>

<?php include $_SERVER['DOCUMENT_ROOT']."/ext/head.php" ?>
    <div id="sign_up">
        <h5>Create new account</h5>
        <form method="post" action="">
            <div class="reference_pass">
                <p>Email address: <input type="email"></p>
                <p>Phone number: <input type="number"></p>
            </div>
            
            <div class="log_pass">
            <p>Confirm email address: <input type="email"></p>
            <p>Password: <input type="password" maxlength="30" required/></p>
            <p>Confirm password: <input type="password" maxlength="30" required/></p>
            </div>
            
            <button name="submit">Sign up</button>
            <input type="hidden" name="next" value=""/>
        </form>
        <p class="note">Already have an account <a href="login.php">Login</a></p>
    </div>


<?php include $_SERVER['DOCUMENT_ROOT']."/ext/base.php" ?>
</body>

</html>
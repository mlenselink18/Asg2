
<!DOCTYPE html>
<html>
    <head>
        <link href="main.css" rel="stylesheet" type="text/css"/>
        <meta charset="UTF-8">
        <title>Login</title>
    </head>

    <body>
        <?php require_once 'include/header.php';?>
        <p><?php if(array_key_exists('error', get_defined_vars())){ echo $error; }?></p>
        <h2>Login</h2>
        <form action="login_process.php" method="post" id='login_form'>

            <label>Email Address:</label>
            <input type="text" name="email"><br>

            <label>Password:</label>
            <input type="password" name="password"><br>


            <label>&nbsp;</label>
            <input type="submit" value="Login"><br>

        </form>
        <?php require_once 'include/footer.php';?>
    </body>
</html>
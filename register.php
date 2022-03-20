
<!DOCTYPE html>
<html>
    <head>
        <link href="main.css" rel="stylesheet" type="text/css"/>
        <meta charset="UTF-8">
        <title>Create a Profile</title>
    </head>

    <body>
        <?php require_once 'include/header.php';?>
        <p><?php if(array_key_exists('error', get_defined_vars())){ echo $error; }?></p>
        <h2>Register Your Account</h2>
        <form action="register_process.php" method="post" id='register_form'>

            <label>First Name:</label>
            <input type="text" name="first_name"><br>

            <label>Last Name</label>
            <input type="text" name="last_name"><br>

            <label>Email Address:</label>
            <input type="text" name="email"><br>

            <label>Password:</label>
            <input type="password" name="password"><br>
            
            <label>Address:</label>
            <input type="text" name="address"><br>
            
            <label>City:</label>
            <input type="text" name="city"><br>
            
            <label>State:</label>
            <input type="text" name="state"><br>
            
            <label>Zip Code:</label>
            <input type="text" name="postalCode"><br>

            <label>&nbsp;</label>
            <input type="submit" value="Sign Up"><br>

        </form>
        <?php require_once 'include/footer.php';?>
    </body>
</html>
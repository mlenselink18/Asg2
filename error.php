<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>Error</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>

<!-- the body section -->
<body>
    <?php require_once 'include/showGetPostVariables.php';?>
    <header><h1>Michael Lenselink's Error Page</h1></header>

    <main>
        <h2 class="top">Error</h2>
        <p><?php echo $error; ?></p>
        <?php funShowAllPOSTandGETvariables() ?>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> My Guitar Shop, Inc.</p>
    </footer>
</body>
</html>
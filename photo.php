
<!DOCTYPE html>
<html>
    <head>
        <link href="main.css" rel="stylesheet" type="text/css"/>
        <meta charset="UTF-8">
        <title>Pictures</title>
    </head>

    <body>
        <?php require_once 'include/header.php';?>
        <?php require_once 'include/showGetPostVariables.php';?>

        <a href="photo.php?id=1">Pic 1</a>
        <a href="photo.php?id=2">Pic 2</a>
        <a href="photo.php?id=3">Pic 3</a>
        <a href="photo.php?id=4">Pic 4</a>
        <a href="photo.php?id=5">Pic 5</a>
        <p>Very Cool Photos</p>
        
        <?php 
        $imageID = filter_input(INPUT_GET, 'id');
        
        if($imageID === false || $imageID === '' || $imageID > 5 || $imageID < 1)
            $imageID = 1;
        
        $imageName = 'tnt'.$imageID.'.jpg';
        ?>

        <img src="<?php echo "images/$imageName"; ?>" alt=""/>
        
        <p>Debugging Variables</p>
        <?php funShowAllPOSTandGETvariables() ?>
        
        <?php require_once 'include/footer.php';?>
    </body>
</html>
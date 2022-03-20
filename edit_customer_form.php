<?php
require('database.php');
$customerID = filter_input(INPUT_POST, 'customerID', FILTER_VALIDATE_INT);
if ($customerID == false)
{
    include('error.php');
}
else
{
//get customer
$query2 = 'SELECT *
          FROM customer
          WHERE ID = :customer_id';
$statement2 = $db->prepare($query2);
$statement2->bindValue(':customer_id', $customerID);
$statement2->execute();
$customer = $statement2->fetch();
$statement2->closeCursor();
}

?>
<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>Edit Customer</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>

<!-- the body section -->
<body>
    <header><h1>Michael Lenselink's Cutsomer Manager</h1></header>

    <main>
        <h1>Edit Customer</h1>
        <form action="edit_customer.php" method="post"
              id="edit_customer_form">

            <label>First Name:</label>
            <input type="text" value="<?php echo $customer['firstName']; ?>" name="firstName"><br>

            <label>Last Name:</label>
            <input type="text" value="<?php echo $customer['lastName']; ?>" name="lastName"><br>

            <label>Address:</label>
            <input type="text" value="<?php echo $customer['address']; ?>" name="address"><br>
            
            <label>City:</label>
            <input type="text" value="<?php echo $customer['city']; ?>" name="city"><br>
            
            <label>State:</label>
            <input type="text" value="<?php echo $customer['state']; ?>" name="state"><br>
            
            <label>Zip Code:</label>
            <input type="text" value="<?php echo $customer['postalCode']; ?>" name="postalCode"><br>
            
            <label>Active:</label>
            <select name="isActive">
                <option value="1" selected>Yes</option><!--Defaulting to active since the user wouldn't edit an inactive account-->
                <option value="0">No</option>
            </select><br>

            <label>&nbsp;</label>
            <input type="hidden" name="customerID"
                           value="<?php echo $customer['ID']; ?>">
            <input type="submit" value="Update"><br>
        </form>
        <p><a href="customer_list.php">Back To List</a></p>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> My Guitar Shop, Inc.</p>
    </footer>
</body>
</html>
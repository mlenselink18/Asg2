<?php
require_once('database.php');

$last_name = filter_input(INPUT_POST, 'last_name');

// Get customers


if($last_name != false && $last_name != '')
{
    $query = 'SELECT * FROM customer where lastName = :last_name';    
}
else
{
    $query = 'SELECT * FROM customer';
}
$statement = $db->prepare($query);
if($last_name != false && $last_name != '')
{
    $statement->bindValue(':last_name', $last_name);    
}
$statement->execute();
$customers = $statement->fetchAll();
$statement->closeCursor();
?>
<!DOCTYPE html>
<html>
    <head>
        <link href="main.css" rel="stylesheet" type="text/css"/>
        <meta charset="UTF-8">
        <title>Customers</title>
    </head>

    <body>
        <?php require_once 'include/header.php';?>
        <?php require_once 'include/showGetPostVariables.php';?>
        <?php $activeStatus = 'Yes'; ?>
        <form action="customer_list.php" method="post">
            <label>Last Name : </label>
            <input type="text" name='last_name'>
            <input type="submit" value="Search">
        </form>
        <br>
        <table>
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Email Address</th>
                <th>City</th>
                <th>State</th>
                <th>Zip Code</th>
                <th>Active</th>
                <th>Edit</th>
            </tr>

            <?php foreach ($customers as $customer) : ?>
            <tr>
                <?php if($customer['isActive'] == '0')
                    $activeStatus = 'No';
                ?>
                <?php $fullName = $customer['firstName'] . ' ' . $customer['lastName'] ?>
                
                <td><?php echo $customer['ID']; ?></td>
                <td><?php echo $fullName; ?></td>
                <td><?php echo $customer['emailAddress']; ?></td>
                <td><?php echo $customer['city']; ?></td>
                <td><?php echo $customer['state']; ?></td>
                <td><?php echo $customer['postalCode']; ?></td>
                <td><?php echo $activeStatus; ?></td>
                <td>
                    <form action="edit_customer_form.php" method="post">
                    <input type="hidden" name="customerID"
                           value="<?php echo $customer['ID']; ?>">
                    <input type="submit" value="Edit">
                </form></td>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        
        <p>Debugging Variables</p>
        <?php funShowAllPOSTandGETvariables() ?>
        
        <?php require_once 'include/footer.php';?>
    </body>
</html>
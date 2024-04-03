<?php
$firstname=$_GET['first_name'];
$lastname=$_GET['last_name'];
?>
<!<!doctype html>
<html>
    <head>
        <title>Display Names.</title>
    </head>
    <label>First Name:</label>
    <span><?php echo $firstname; ?></span><br>
    <label>Last Name:</label>
    <span><?php echo $lastname; ?></span>
</html>
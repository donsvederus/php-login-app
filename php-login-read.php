<?php

// This connects to the database, Note: create a database with ID, username, password
$connection = mysqli_connect('localhost', 'root', '', 'loginapp');
    if(!$connection) {
        die("Database connection failed");
    }

// selects the data from the db
$query = "SELECT * FROM users";  // the * means all
$result = mysqli_query($connection, $query);


// use a prebuilt function,  created a variable for checking
$result = mysqli_query($connection, $query);

// checks and kills the process if things dont work out
if(!$result) {
    die('Query FAILED' . mysqli_error());
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dons PHP Login App Example</title>
    <!-- Added Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
<div class="container">

    <div class="col-xs-6">

    <?php

    // this prints out the data from the database formatted
    while($row = mysqli_fetch_assoc($result)){
        
        ?>

        <pre><?php print_r($row); ?></pre>

        <?php

    }

    ?>

    </div>

</div>   
</body>
</html>
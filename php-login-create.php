<?php

// isset checks if the form was submitted
if(isset($_POST['submit'])) {

    // assigning the form names into variables
    $username = $_POST['username'];
    $password = $_POST['password'];

    // This connects to the database, Note: create a database with ID, username, password
    $connection = mysqli_connect('localhost', 'root', '', 'loginapp');
        if(!$connection) {
            die("Database connection failed");
        }


    // this inserts the data into the database, and we assign to a variable, so we can check it
    $query = "INSERT INTO users(username, password) ";  // these are the columns for the db
    $query .= "VALUES ('$username', '$password')"; // the .= concatenate to the previous line

    // use a prebuilt function,  created a variable for checking
    $result = mysqli_query($connection, $query);

    // checks and kills the process if things dont work out
    if(!$result) {
        die('Query FAILED' . mysqli_error());
    } else {
        echo "Data submitted";
    }
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

        <!-- Login Form Start -->
        <form action="php-login-create.php" method="post">
        
            <div class="form-group">

                <label for="username">Username</label>
                <input type="text" name="username" class="form-control">

                <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
            
            </div>

            <input type="submit" name="submit" class="btn btn-primary" value="Submit">
        
        </form>
        <!-- Login Form End -->

    </div>

</div>   
</body>
</html>
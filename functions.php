<?php include "db.php"; // include the db ?> 
<?php

function showAllData () {
    
    // make sure the connection is global, global brings in variables, functions are local
    global $connection;

    // selects the data from the db, if you dont have a query you can't pull info from db
    $query = "SELECT * FROM users";  // the * means all
    $result = mysqli_query($connection, $query);

    // use a prebuilt function,  created a variable for checking
    $result = mysqli_query($connection, $query);

    // checks and kills the process if things dont work out
    if(!$result) {
        die('Query FAILED' . mysqli_error());
    }

    // this will pull the id data from the database and display it in a option tag
    while($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        echo "<option value='$id'>$id</option>";
    }
}
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

function updateTable() {
    global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    $query = "UPDATE users SET ";  // Note: if you don't put a space after SET, you will get an error
    $query .= "username = '$username', ";
    $query .= "password = '$password' ";
    $query .= "WHERE id = $id ";  // don't put quotes around $id because it's an integer

    $result = mysqli_query($connection, $query);
    // this tests the query
    if(!$result) {
        die("query failed " . mysqli_error($connection));
    }

}

function deleteRows() {
    global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    $query = "DELETE FROM users ";  // Note: space
    $query .= "WHERE id = $id ";

    $result = mysqli_query($connection, $query);
    if(!$result) {
        die("query failed " . mysqli_error($connection));
    }

}
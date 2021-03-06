<?php include "db.php"; // include the db ?> 
<?php

function createRows() {    

    // isset checks if the form was submitted
    if(isset($_POST['submit'])) {
        
        // make sure the connection is global, global brings in variables, functions are local
        global $connection;

        // assigning the form names into variables
        $username = $_POST['username'];
        $password = $_POST['password'];

        // help preventsSQL Injections and assigns it back to the variable
        // the function allows for adding ' special characters
        $username = mysqli_real_escape_string($connection, $username);
        $password = mysqli_real_escape_string($connection, $password);

        // this inserts the data into the database, and we assign to a variable, so we can check it
        $query = "INSERT INTO users(username, password) ";  // these are the columns for the db
        $query .= "VALUES ('$username', '$password')"; // the .= concatenate to the previous line

        // use a prebuilt function,  created a variable for checking
        $result = mysqli_query($connection, $query);

        // checks and kills the process if things dont work out
        if(!$result) {
            die('Query FAILED' . mysqli_error());
        } else {
            echo "Record Created";
        }
    }

}

function readRows() {

    // make sure the connection is global, global brings in variables, functions are local
    global $connection;

    // this grabs all the users in the database
    $query = "SELECT * FROM users";  // the * means all

    // use a prebuilt function,  created a variable for checking
    $result = mysqli_query($connection, $query);

    // checks and kills the process if things dont work out
    if(!$result) {
        die('Query FAILED' . mysqli_error());
    }
    
    // this will pull the id data from the database and display it in a option tag
    while($row = mysqli_fetch_assoc($result)) {
        print_r($row);
    }
}

function showAllData() {

    // make sure the connection is global, global brings in variables, functions are local
    global $connection;

    // this grabs all the users in the database
    $query = "SELECT * FROM users";  // the * means all

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
    
    if(isset($_POST['submit'])) {

        global $connection;
        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];

        //allows for special characters and prevents sql injections
        $username = mysqli_real_escape_string($connection, $username);
        $password = mysqli_real_escape_string($connection, $password);

        $query = "UPDATE users SET ";  // Note: if you don't put a space after SET, you will get an error
        $query .= "username = '$username', ";
        $query .= "password = '$password' ";
        $query .= "WHERE id = $id ";  // don't put quotes around $id because it's an integer

        $result = mysqli_query($connection, $query);
        // this tests the query
        if(!$result) {
            die("query failed " . mysqli_error($connection));
        } else {
                echo "Record Updated";
        }
    }   

}

function deleteRows() {

    if(isset($_POST['submit'])) {
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
        else {
            echo "Record Deleted";
        }
    }
}

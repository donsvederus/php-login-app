<?php

// This connects to the database, Note: create a database with ID, username, password
$connection = mysqli_connect('localhost', 'root', '', 'loginapp');
    if(!$connection) {
        die("Database connection failed");
    }

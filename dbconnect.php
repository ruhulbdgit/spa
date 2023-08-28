<?php

/**
 * this file will be used to connect database 
 * 
 */

// function for db connection if not exists 
if (!function_exists("dbconnect")) {
    function dbconnect()
    {
        // create a db connection and return it
        $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS);
        if (!$conn) {
            die('Could not connect: ' . mysqli_error($conn));
        }
        // select db
        mysqli_select_db($conn, DB_NAME);
        return $conn;
    }
}

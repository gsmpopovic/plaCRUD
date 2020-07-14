<?php 
$servername='localhost';
    // update variable for our server
    $username='root';
    //"root" refers to the topmost folder in a device's file system.
    $password ='';
    // Empty string because We haven't set a password
    $databasename='plato';
    // Name of our database in mysql

    //update a connection to database, stored in variable $connection
    // use the inbuilt function mysqli_connect(); 
    // to attempt to connect to database
    $connection = mysqli_connect($servername,$username, $password,$databasename);


    // Check if we are connected to database
    // Either connected, or has failed

    if (!$connection){
        // If our connection has failed, 
        // kill connection via die() 
        // and display an error message using
        //mysqli_connect_error();
        die ('Connection unsuccessful: '.mysqli_connect_error());

    }
    else{
        // we are connected to database
    }
?>
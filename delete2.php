<?php
function deleteRecord2(){ 

// Connect to DB
require('connect.php');

// get id of row user wants to delete 

$id = $_POST['delete-id'];
// CREATE SQL QUERY

$sql = "DELETE FROM `meno` 
            WHERE `id` = '$id'";

$delete_query = mysqli_query($connection, $sql);
// check if query successful

if (!$delete_query){

    echo 'Error: '.$sql.mysqli_error($connection);
}
else {
    echo 'Successful deletion.';
}

// close connection and redirect to main php file 

mysqli_close($connection);

header('Location: index.php');

}

// check if button has been clicked
if (isset($_POST['submit-delete'])){
    deleteRecord2();
// Attempt to connect to database if button
// has been clicked 
}

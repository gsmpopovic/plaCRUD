
<?php
/* 1. isset to call a function 
    2. Create a connection to the database 
    3. set up and run our insert query 
    4. close connection
    5. redirect user to index.php */

function updateRecord()
{

    // Connect to DB
    require('connect.php');

    $id = $_POST['update-id'];
    $idiom = $_POST['update-idiom'];
    $occurence = $_POST['update-occurence'];

    // Update query
    $sql = "UPDATE `meno` 
            SET
            `idiom` = '$idiom',
            `occurence` = '$occurence'
            WHERE `id` = '$id' ";

    $update_query = mysqli_query($connection, $sql);

    if (!$update_query) {
        echo "Error: " . $sql . mysqli_error($connection);
    }

    mysqli_close($connection);

    header('Location: index.php');

    // check if save button has been clicked 
}
if (isset($_POST['submit-update'])) {
    updateRecord();
}
?> 
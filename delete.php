
<?php
function deleteRecord()
{

    // Connect to DB
    require('connect.php');

    $id = $_POST['delete-id'];

    // Delete query
    $sql = "DELETE FROM `meno` 
    WHERE
    `id` = '$id' ";

    $delete_query = mysqli_query($connection, $sql);

    if (!$delete_query) {
        echo "Error: " . $sql . mysqli_error($connection);
    }


    mysqli_close($connection);

    header('Location: index.php');

    // check if save button has been clicked 
}
if (isset($_POST['submit-delete'])) {
    deleteRecord();
}
?> 
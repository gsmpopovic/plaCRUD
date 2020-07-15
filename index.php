<!DOCTYPE html>
<!-- Main file -->
<html>

<head>
    <title> Attic Idioms in Plato's Meno </title>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">    <!-- Link to external stylesheet --> 
    <link rel='stylesheet' type='text/css' href='./assets/style.css'>
</head>

<body>
    <div class='main-div'>
        <?php require_once 'create.php'; ?>
        <?php require_once 'update.php'; ?>
        <?php require_once 'delete.php'; ?>


        <div>
            <h2> ATTIC IDIOMS IN PLATO'S MENO </H2>

            <?php // BEGIN PHP CODE BLOCK 

            // Connect to DB
            require('connect.php');

            // Select query
            // Query database for our records

            $sql = "SELECT * FROM meno"; 
            // SELECT functionality stored in variable

            $result = mysqli_query($connection, $sql); // // Query database; 
            // store result of query in $result

            // DISPLAY TABLE 
            $rowCount = mysqli_num_rows($result);
            // Count number of rows so as to check, 
            // whether table has been filled with input

            if ($rowCount > 0) { // echo out table if table has data
                // Create table columns; 
                echo "
                        <table> 
                    
                        <thead> 
                        <tr>
                            <th> Record ID </th>

                            <th> Idiom </th>
                        
                            <th> Occurence </th>

                            <th> Translation </th>
                            
                            <th> Commentary </th> 
                        </tr>
                        </thead>
                        
                        "; // Columns in Heading created
            }
            ?>
            <!-- END PHP CODE BLOCK -->

            <?php while ($row = $result->fetch_assoc()) : ?>
                <!-- Create a variable, $row, that will store the associative array, row, 
    created by the function fetch_assoc, called on $result -->

                <tr>
                    <!-- Create a row for each associative array, $row -->
                    <td> <?php echo $row['id'] ?> </td>
                    <td> <?php echo $row['idiom'] ?> </td>
                    <td> <?php echo $row['occurence'] ?> </td>
                    <td> <?php echo $row['translation'] ?> </td>
                    <td> <?php echo $row['commentary']?> </td> 
                </tr>

            <?php endwhile ?>
            <!-- Close while loop -->

            </table>
        </div>

        <div class='content-wrapper'>
            <!-- content-wrapper will contain entire create form -->
            <button id='create-button'> Create Record </button>
            <!-- Button to CREATE record -->
            <button id='update-button'> Edit Record </button>
            <!-- Button to EDIT record -->
            <button id='delete-button'> Delete Record </button>
            <!-- Button to DELETE record -->

            <!-- FORM to CREATE an entry -->
            <form action='index.php' method='POST' id='create-form'>
                <input type='text' placeholder='Enter an idiom' name='create-idiom'><br>
                <!-- ENTER IDIOM -->
                <input type='text' placeholder='Enter the number of occurences' name='create-occurence'><br>
                <!-- ENTER OCCURENCES-->
                <input type='text' placeholder='Enter a translation' name='create-translation'><br>
                <!-- ENTER TRANSLATION -->
                <!-- ENTER TRANSLATION -->
                <input type='text' placeholder='Enter commentary' name='create-commentary'><br>
                <input type='submit' value='Save' name='create-button' class="small-button">
                <!-- Create a button that saves input -->
            </form>

            <!-- FORM to UPDATE/EDIT an entry -->
            <form action='update.php' method='POST' id='update-form'>
                <input type='text' placeholder='Enter a record ID' name='update-id'><br>
                <!-- ENTER ID-->
                <input type='text' placeholder='Enter an idiom' name='update-idiom'><br>
                <!-- ENTER IDIOM-->
                <input type='text' placeholder='Enter the number of occurences' name='update-occurence'><br>
                <!-- ENTER OCCURENCES --> 
                <input type='text' placeholder='Enter a translation' name='update-translation'><br>
                <!-- ENTER TRANSLATION -->
                <input type='text' placeholder='Enter commentary' name='update-commentary'><br>
                <!-- ENTER COMMENTS-->
                <input type='submit' value='Save' name='submit-update' class="small-button">
                <!-- Create a button that saves input -->
            </form>


            <!-- FORM to UPDATE/EDIT entry -->
            <form action='delete.php' method='POST' id='delete-form'>
                <input type='text' placeholder='Enter a record ID' name='delete-id'><br>
                <!-- ENTER ID -->
                <input type='submit' value='Save' name='submit-delete' class="small-button">
                <!-- Create a button that saves input -->
            </form>

        </div>
        <script src='script.js'></script>
    </div>
</body>

</html>
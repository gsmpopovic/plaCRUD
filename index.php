<!DOCTYPE html>
<!-- Main file -->
<html>

<head>
    <title> Attic Idioms in Plato's Meno </title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }

        .main-div {
            width: 80vw;
            margin: 0 auto;
        }

        h2 {
            text-align: center;
        }

        table {
            margin: 15px auto;
            width: 50 vw;
            text-align: center;
            border: 2px solid black; 

        }

        table tr td {
            padding: 20px;
            border: 2px solid black; 

        }

        .content-wrapper {
            width: 100%;
            margin: 0 auto;
            text-align: center;
        }

        #create-form,
        #delete-form,
        #update-form {
            display: none;

        }

        #create-button,
        #delete-button,
        #update-button {
            width: 140 px;
            height: 37.5 px;
            background-color: blue;
            color: #FFFFFF;
            border-radius: 4px;
            border: 1.5px solid black;
            cursor: pointer;
            letter-spacing: 1.5 px;

        }

        .small-button {
            width: 70px;
            height: 28.5px;
            border-radius: 2px;
            border: none;
            cursor: pointer;
            background-color: blue;
            color: #FFFFFF;
            padding: 3px;
        }

        input[Type='text'] {
            margin: 6px;
            width: 260px;
            height: 32px;
        }
    </style>

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
                <!-- ENTER TRANSLATION --> 
                <input type='text' placeholder='Enter a translation' name='update-translation'><br>
                <!-- ENTER OCCURENCES -->
                <!-- ENTER COMMENTS-->
                <input type='text' placeholder='Enter commentary' name='update-commentary'><br>
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
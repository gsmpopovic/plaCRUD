<?php

        function createRecord(){
                    // Connect to DB
                    require('connect.php');

                    // User input for Platonic idiom 

                    $idiom = $_POST['create-idiom'];

                    // User input for number of occurences

                    $occurence = $_POST['create-occurence'];

                    // User input for idiom's translation

                    $translation = $_POST['create-translation'];

                    // User commentary on idiom 

                    $commentary = $_POST['create-commentary'];

                    $sql = "INSERT INTO meno(idiom, occurence, translation, commentary)
                     VALUES('$idiom', '$occurence', '$translation', '$commentary')";


                    //Check if query successful

                    if (mysqli_query($connection, $sql)){
                        echo 'Successful insertion<br/>';
                    }

                    else{
                        echo "Error: ".$sql.mysqli_connect_error($connection);
                    }

                    // Close connection

                    mysqli_close($connection);

                    // Redirect user to main file, i.e., index.php
                    header('Location: index.php');

        } // createRecord(); ENDS ////////////////////////////////////////////
                    
                         // Check if submit button 
                        // has been clicked,

                     if (isset($_POST['create-button'])){
                    createRecord();
                    // Attempt to connect to database if button
                    // has been clicked 
                    }

                ?>
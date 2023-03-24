<?php
    $link = mysqli_connect("localhost", "root", "", "note_editor");
    
    if(mysqli_connect_error()){
        die('ERROR:Unable to connect to the database:'.mysqli_connect_error());
    }
?>



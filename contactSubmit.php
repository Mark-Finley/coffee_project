<?php
    require('includes/dbcon.php');

    if(isset($_POST['submit'])){
        echo $_POST['name'] . ' ' . $_POST['email'] . ' ' . $_POST['description'];

        $sql = "INSERT INTO contacts (name, email, description) VALUES ('".$_POST['name']."', '".$_POST['email']."', '".$_POST['description']."' )";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
        $conn->close();

    }
?>
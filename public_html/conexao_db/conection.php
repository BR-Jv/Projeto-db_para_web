<?php
    $dbservername = "localhost";
    $dbusername = "id18769768_adm";
    $dbpassword = "Mortadela_123";
    $dbname = "id18769768_db_teste";
    
    $msg = "tudo ok";
    
    // Create connection
    $conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
?>

<?php
    
    // servername => localhost
    // username => u325517749_meliora
    // password => Meliora@123;
    // database name => u325517749_meliora
    $conn = mysqli_connect("localhost", "u325517749_meliora", "Meliora@123", "u325517749_meliora");
    
    // Check connection
    if($conn == false){
        die("ERROR: Could not connect.". mysqli_connect_error());
    }

?>
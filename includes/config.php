
<?php

    define("DB_SERVER","localhost");
    define("DB_NAME","loginsystem01");
    define("DB_USER","root");
    define("DB_PASS","");

    $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

    // Check Connection
    if (mysqli_connect_errno()) {
        die("Failed to connect to MYSQL.". mysqli_connect_error());
    }

?> 
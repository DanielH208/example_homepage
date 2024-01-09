<?php
/*
function debug_to_console($data, $context = 'Debug in Console') {

    // Buffering to solve problems frameworks, like header() in this and not a solid return.
    ob_start();

    //$output  = 'console.info(\'' . $context . ':\');';
    $output .= 'console.log(' . json_encode($data) . ');';
    $output  = sprintf('<script>%s</script>', $output);

    echo $output;
}*/


try {

    $env = parse_ini_file('db.env');
    $host = $env["MySQL_DB_HOST"];
    $dbname = $env["MySQL_DB_NAME"];
    $username = $env["MySQL_DB_USER_NAME"];
    $password = $env["MySQL_DB_PASSWORD"];

    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        //echo "Connected to $dbname at $host successfully.";
        }
    catch (PDOException $pe) {
        die ("Could not connect to the database $dbname :" . $pe->getMessage());
    }
}

catch (PDOException $pe) {
    //die ("Error retrieving details from .env file:" . $pe->getMessage());
    $_SESSION['errMsg'] = "Database details not correct";
    header('Location: index.php#submit-button');
}



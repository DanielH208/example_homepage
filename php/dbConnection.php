<?php
$host = "localhost";
$dbname = "netmatters-homepage";
$username = "netmatters-user";
$password = "dfds57jmj232xcdrfd";

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
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    //echo "Connected to $dbname at $host successfully.";
    }
catch (PDOException $pe) {
    die ("Could not connect to the database $dbname :" . $pe->getMessage());
}


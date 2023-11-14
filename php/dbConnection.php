<?php
$host = "localhost";
$dbname = "netmatters-homepage";
$username = "netmatters-user";
$password = "dfds57jmj232xcdrfd";


function debug_to_console($data, $context = 'Debug in Console') {

    // Buffering to solve problems frameworks, like header() in this and not a solid return.
    ob_start();

    //$output  = 'console.info(\'' . $context . ':\');';
    $output .= 'console.log(' . json_encode($data) . ');';
    $output  = sprintf('<script>%s</script>', $output);

    echo $output;
}

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    echo "Connected to $dbname at $host successfully.";
    }
catch (PDOException $pe) {
    die ("Could not connect to the database $dbname :" . $pe->getMessage());
}

$db_data;

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Get the 3 most recent posts from the datatbase
    $pdoStatement = $conn->query('
    SELECT * FROM News 
    ORDER BY id DESC 
    LIMIT 3
    ');
    // Returns an array of associative arrays
    $db_data = $pdoStatement->fetchAll();
    debug_to_console($db_data);
    echo($db_data[0]["article-image"]);
} catch (Exception $exception) {
    echo "Database query failed: " . $exception->getMessage();
    exit;
}

function assembleArticle($article_image, $title, $read_time, $info, $author_image, $author_name) {
    $date = new Datetime();
    return '
    <div class="article-three">
        <a class="article-top-link" href="#" onclick="homepageLink()"></a>
        <div class="image-container">
            <a id="' . $title . '-careers-btn" class="careers-btn" href="#" onclick="homepageLink()"> Careers </a>
            <img class="article-image" src="' . $article_image . '" alt="Now hiring receptionist artwork">
        </div>
        <div class="block">
            <h3>
                <a href="#" onclick="homepageLink()" id="' . $title . '-title">' . $title . '</a>
                <span class="read-time">' . $read_time . ' </span>
            </h3>
            <p>
                ' . $info . '
            </p>
            <a id="reception-button" class="btn article-buttons" href="#" onclick="homepageLink()"> Read More </a>
            <div class="user">
                <div class="avatar">
                    <img src="'. $author_image . '" class="article-image" alt="Picture of Bethany Shakespear">
                </div>
                <div class="details">
                    <strong class="text-primary">Posted by ' . $author_name . '</strong>
                    <br>
                    '. $date . '
                </div>
            </div>
        </div>
    </div>'
}

function displayNews($data_set) {
    foreach ($data_set as $article) {
        debug_to_console("-------------------------------------------------");
        debug_to_console("");
        debug_to_console("ID: " . $article["ID"]);
        debug_to_console("article-image: " . $article["author-image"]);
        debug_to_console("author-name: " . $article["author-name"]);
        debug_to_console("info: " . $article["info"]);
        debug_to_console("read-time: " . $article["read-time"]);
        debug_to_console("title: " . $article["title"]);
    }


}

displayNews($db_data);
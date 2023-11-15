<?php
    function getLatestNews() {
        include "dbConnection.php";

        try {
            $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            $pdoStatement = $conn->query('
            SELECT * FROM News 
            ORDER BY id DESC 
            LIMIT 3
            ');
            return $pdoStatement->fetchAll();
            //debug_to_console($db_data);
        } catch (Exception $exception) {
            echo "Database query failed: " . $exception->getMessage();
            exit;
        }
    }


    function assembleArticle($article_image, $title, $read_time, $info, $author_image, $author_name, $counter) {
        $date = date('jS F Y');
        return '
        <div id="article-' . $counter . '">
            <a class="article-top-link" href="#" onclick="homepageLink()"></a>
            <div class="image-container">
                <a class="careers-btn ' . str_replace(" ", "-", $title) . '-careers-btn" href="#" onclick="homepageLink()"> Careers </a>
                <img class="article-image" src="' . $article_image . '" alt="Now hiring receptionist artwork">
            </div>
            <div class="block">
                <h3>
                    <a href="#" class="'.str_replace(" ", "-", $title) .'-title" onclick="homepageLink()">' . $title . '</a>
                    <span class="read-time">' . $read_time . ' </span>
                </h3> 
                <p>
                    ' . $info . '
                </p>
                <a class="btn article-buttons ' .str_replace(" ", "-", $title) . '-button" href="#" onclick="homepageLink()"> Read More </a>
                <div class="user">
                    <div class="avatar">
                        <img src="'. $author_image . '" class="article-image" alt="Picture of Bethany Shakespear">
                    </div>
                    <div class="details">
                        <strong class="text-primary">Posted by ' . $author_name . '</strong>
                        <br>
                        ' . $date . '
                    </div>
                </div>
            </div>
        </div>';
    }

?>
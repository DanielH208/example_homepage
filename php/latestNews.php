<?php 
    include "getLatestNews.php";
?>

<div class="latest-articles">
    <div class="bar">
        <div class="container">
            <div class="heading-container">
                <h2 id="articles-bar-latest-news">
                    <strong>Latest News</strong>
                </h2>
                <h3 id="articles-bar-view-all">
                    <a href="#" onclick="homepageLink()">View All <i class="fa-solid fa-arrow-right"></i></a>
                </h3>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="container" id="articles-container">
            <div class="article-list">
                <?php
                $counter = 0;
                foreach (getLatestNews() as $article) {
                    $counter++;
                    echo assembleArticle($article["article-image"], $article["title"], $article["read-time"], $article["info"], $article["author-image"], $article["author-name"], $counter);
                }
                ?>
            </div>
        </div>
    </div>
    <div class="smallestvp-view-all">
        <a href="#" onclick="homepageLink()">View All <i class="fa-solid fa-arrow-right"></i></a>
    </div>
</div>
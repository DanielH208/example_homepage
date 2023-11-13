<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Daniel Higgins hand coded clone of NetMatters homepage">
        <meta name="keywords" content="Daniel, Higgins, Netmatters, Software, Software developer, HTML, CSS, JavaScript">
        <meta name="author" content="Daniel Higgins">
        <title>Contact Enquiry Form</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,600;1,600&family=Roboto+Condensed:wght@700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/application.css">
        <link rel="stylesheet" href="css/hamburgers.css">
        <link rel="stylesheet" type="text/css" href="js/slick/slick.css">
        <link rel="stylesheet" type="text/css" href="js/slick/slick-theme.css">
        <script src="https://kit.fontawesome.com/7cba581338.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <?php include("php/cookies.php"); ?>
        <?php include("php/sidenav.php"); ?>
        <main>
            <?php include("php/header.php"); ?>
            <div id="main-content" class="main-content-contact">
                <div id="enquiry-container">
                    <div class="container">
                        <div>
                            <p><a>Home</a> / Our Offices</p>
                        </div>
                        <h1>Our Offices</h1> 
                        <div id="offices-container">
                            <ul id="offices-row">
                                <div class="offices-item">
                                    <h1>Office 1</h1>
                                </div>
                                <div class="offices-item">
                                    <h1>Office 2</h1>
                                </div>
                                <div class="offices-item">
                                    <h1>Office 3</h1>
                                </div>
                                <div class="offices-item">
                                    <h1>Office 4</h1>
                                </div>
                            </ul>
                        </div>
                        <div id="enquiry-container">
                            <form>
                            </form>
                            <div id="contact-enquiry-info">
                            </div>
                        </div>
                    </div>
                </div>
                <?php include("php/newsletter.php"); ?>
                <?php include("php/footer.php"); ?>
            </div>
        </main>
        <script src="js/jquery-3.7.0.min.js"></script>
        <script src="js/slick/slick.js"></script>
        <script src="js/app.js"></script>
    </body>
</html>
<?php 
    function debug_to_console($data, $context = 'Debug in Console') {

        // Buffering to solve problems frameworks, like header() in this and not a solid return.
        ob_start();

        $output  = 'console.info(\'' . $context . ':\');';
        $output .= 'console.log(' . json_encode($data) . ');';
        $output  = sprintf('<script>%s</script>', $output);

        echo $output;
    } 
   
    function santise_input($data) {
        $data = htmlspecialchars($data);
        $data = trim($data);
        $data = stripslashes($data);
        return $data;
    }

    function validate_input($data, $regex=null, $name) {
        if (empty($data) == true) {
            debug_to_console($name . " has no value");
            return false;
        }
        else if ($regex == false) {
            $$data = " ";
            debug_to_console($data . " is not a valid " . $name);
            return false;
        }
        return true;
    }


    include 'php/sendData.php';
    


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //debug_to_console(htmlspecialchars($_POST["name"]));
        // Filter out any invalid or malicious inputs and store form values inside corresponding variables
        $name = santise_input($_POST["name"]);
        $email = santise_input($_POST["email"]);
        $company = santise_input($_POST["comp-name"]);
        $phone = santise_input($_POST["telephone-num"]);
        $message = santise_input($_POST["message"]);
        
        // If all inputs are validated to true call function to send data to database
        if (
            validate_input($name, preg_match("/^[a-zA-Z-' ]*$/", $name) ,"name")  && 
            validate_input($email, filter_var($email, FILTER_VALIDATE_EMAIL), "email") && 
            validate_input($phone, preg_match("/^\\+?[1-9][0-9]{7,14}$/", $phone), "telephone number")
            ) 
            {
            sendData($name, $email, $company, $phone, $message);
        } 
    }
?>


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
                        <div id="offices-container" class="container">
                            <ul id="offices-row">
                                <div class="offices-item">
                                    <img class="contact-office-image" src="assets/images/contact-page/asset-1.jpeg"/>
                                    <a><h2>London Office</h2></a>
                                    <p>
                                        Unit G6,<br>
                                        Pixel Business Centre,<br>
                                        110 Brooker Road, Waltham Abbey,<br>
                                        London,<br>
                                        EN9 1JH
                                    </p>
                                    <a><h1>02045 397354</h1></a>
                                    <a>VIEW MORE</a>
                                    <img class="contact-location-images" src="assets/images/contact-page/london-loc.jpeg"/>
                                </div>
                                <div class="offices-item">
                                    <img class="contact-office-image" src="assets/images/contact-page/asset-31.jpeg"/>
                                    <a><h2>Cambridge Office</h2></a>
                                    <p>
                                        Unit 1.31,<br>
                                        St John's Innovation Centre,<br>
                                        Cowley Road, Milton,<br>
                                        Cambridge,<br>
                                        CB4 0WS
                                    </p>
                                    <a><h1>01223 37 57 72</h1></a>
                                    <a>VIEW MORE</a>
                                    <img class="contact-location-images" src="assets/images/contact-page/cambridge-loc.jpeg"/>
                                </div>
                                <div class="offices-item">
                                    <img class="contact-office-image" src="assets/images/contact-page/asset-38.jpeg"/>
                                    <a><h2>Wymondham Office</h2></a>
                                    <p>
                                        Unit 15,<br>
                                        Penfold Drive,<br>
                                        Gateway 11 Business Park,<br>
                                        Wymondham, Norfolk,<br>
                                        NR18 0WZ
                                    </p>
                                    <a><h1>01603 70 40 20</h1></a>
                                    <a>VIEW MORE</a>
                                    <img class="contact-location-images" src="assets/images/contact-page/wymondham-loc.jpeg"/>
                                </div>
                                <div class="offices-item">
                                    <img class="contact-office-image" src="assets/images/contact-page/asset-45.jpeg"/>
                                    <a><h2>Great Yarmouth Office</h2></a>
                                    <p>
                                        Suite F23,<br>
                                        Beacon Innovation Centre,<br>
                                        Beacon Park, Gorleston,<br>
                                        Great Yarmouth, Norfolk<br>
                                        NR31 7RA
                                    </p>
                                    <a><h1>01493 60 32 04</h1></a>
                                    <a>VIEW MORE</a>
                                    <img class="contact-location-images" src="assets/images/contact-page/yarmouth-loc.jpeg"/>
                                </div>
                            </ul>
                        </div>
                        <div id="enquiry-container">
                            <form action="contact.php" method="post">
                                <label for="name">Your Name</label>
                                <input name="name"> 
                                <label for="comp-name">Company Name</label>
                                <input name="comp-name">
                                <label for="email">Your Email</label>
                                <input name="email">
                                <label for="telephone-num">Your Telephone Number</label>
                                <input name="telephone-num">
                                <label for="message">Message</label>
                                <textarea name="message">
                                    Hi, I am interested in discussing a Our Offices solution, 
                                    could you please give me a call or send an email?
                                </textarea>
                                <div class="form-group" >
                                    <label class="media">
                                        <span class="media-left checkbox-left">
                                            <span class="checkbox">
                                                <input type="checkbox">
                                                <span id="checkbox-bfr" class="mdi-"></span>
                                            </span>  
                                        </span>         
                                        <span class="media-body">
                                            Please tick this box if you wish to receive marketing information from us.
                                            Please see our
                                            <a id="privacy-link" href="#" onclick="homepageLink()">Privacy Policy</a>
                                            for more information on how we keep your data safe.
                                        </span>    
                                    </label>            
                                </div>
                                <button type="submit">Send Enquiry</button>
                                <div id="contact-enquiry-info">
                                </div>
                            </form>
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
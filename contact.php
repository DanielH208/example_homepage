<?php 

    session_start();
    
    if (!isset($_SESSION['success'])) {
        $_SESSION['success'] = false;
    }
    if (!isset($_SESSION['errMsg'])) {
        $_SESSION['errMsg'] = '';
    }

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

    
 
    function validate_input($data, $input, $regex=true) {
        if (empty($data) == true) {
            $_SESSION['errMsg'] = $input . " has no value";
            $_SESSION[$input ."-valid"] = false;
            return false;
        }
        else if ($regex == false) {
            $_SESSION['errMsg'] = $data . " is not a valid " . $input;
            $_SESSION[$input ."-valid"] = false;
            return false;
        }
        $_SESSION[$input ."-valid"] = true;
        return true;
    }

    include 'php/sendData.php';
    


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        // Filter out any invalid or malicious inputs and store form values inside corresponding variables
        $name = santise_input($_POST["name"]);
        $_SESSION['name'] = $name;
        $email = santise_input($_POST["email"]);
        $_SESSION['email'] = $email;
        $company = santise_input($_POST["comp-name"]);
        $_SESSION['company'] = $company;
        $phone = santise_input($_POST["telephone-num"]);
        $_SESSION['telephone'] = $phone;
        $message = santise_input($_POST["message"]);
        $_SESSION['message'] = $message;

        $marketing = $_POST["marketing-checkbox"];

        if ($marketing != "yes") { 
            $marketing = "no";
        } 
        
        
        // Session variables for storing whether an input is valid 
        $_SESSION['name-valid'] = true;
        $_SESSION["email-valid"] = true;
        $_SESSION["telephone number-valid"] = true;
        $_SESSION["message-valid"] = true;


        validate_input($name,"name", preg_match("/^[a-zA-Z-' ]*$/", $name));
        validate_input($email, "email", filter_var($email, FILTER_VALIDATE_EMAIL));
        validate_input($phone, "telephone number", preg_match("/^\+?\(?([0-9]{2,4})[)\s\d.-]+([0-9]{3,4})([\s.-]+([0-9]{3,4}))?$/", $phone));
        validate_input($message, "message");

        // If all inputs are validated to true call function to send data to database
        if (
            validate_input($name,"name", preg_match("/^[a-zA-Z-' ]*$/", $name))  && 
            validate_input($email, "email", filter_var($email, FILTER_VALIDATE_EMAIL)) && 
            validate_input($phone, "telephone number", preg_match("/^\+?\(?([0-9]{2,4})[)\s\d.-]+([0-9]{3,4})([\s.-]+([0-9]{3,4}))?$/", $phone)) && 
            validate_input($message, "message")
            ) 
            {
            sendData($name, $email, $company, $phone, $message, $marketing);
            unset($_SESSION['name']);
            unset($_SESSION['email']);
            unset($_SESSION['company']);
            unset($_SESSION['telephone']);
            unset($_SESSION['message']);
                
            $_SESSION['success'] = true;
            $_SESSION['errMsg'] = '';
        } 
        header('Location: contact.php#enquiry-submit-button');
        exit();
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
                <div id="top-link-path">
                    <div class="container">
                        <p><a id="return-home-link" href="/"><strong>Home</strong></a> / Our Offices</p>
                    </div>
                </div>
                <div id="enquiry-container">
                    <div class="container">       
                        <h1>Our Offices</h1> 
                        <div id="offices-container" class="container">
                            <ul id="offices-row">
                                <div class="offices-item">
                                    <img class="contact-office-image" src="assets/images/contact-page/asset-1.jpeg"/>
                                    <div class="office-content">
                                        <a><h2>London Office</h2></a>
                                        <p>
                                            Unit G6,<br>
                                            Pixel Business Centre,<br>
                                            110 Brooker Road, Waltham Abbey,<br>
                                            London,<br>
                                            EN9 1JH
                                        </p>
                                        <a><h1>02045 397354</h1></a>
                                        <a class="office-button">VIEW MORE</a>
                                    </div>
                                    <img class="contact-location-images" src="assets/images/contact-page/london-loc.jpeg"/>
                                </div>
                                <div class="offices-item">
                                    <img class="contact-office-image" src="assets/images/contact-page/asset-31.jpeg"/>
                                    <div class="office-content">
                                        <a><h2>Cambridge Office</h2></a>
                                        <p>
                                            Unit 1.31,<br>
                                            St John's Innovation Centre,<br>
                                            Cowley Road, Milton,<br>
                                            Cambridge,<br>
                                            CB4 0WS
                                        </p>
                                        <a><h1>01223 37 57 72</h1></a>
                                        <a class="office-button">VIEW MORE</a>
                                    </div>
                                    <img class="contact-location-images" src="assets/images/contact-page/cambridge-loc.jpeg"/>
                                </div>
                                <div class="offices-item">
                                    <img class="contact-office-image" src="assets/images/contact-page/asset-38.jpeg"/>
                                    <div class="office-content">
                                        <a><h2>Wymondham Office</h2></a>
                                        <p>
                                            Unit 15,<br>
                                            Penfold Drive,<br>
                                            Gateway 11 Business Park,<br>
                                            Wymondham, Norfolk,<br>
                                            NR18 0WZ
                                        </p>
                                        <a><h1>01603 70 40 20</h1></a>
                                        <a class="office-button">VIEW MORE</a>
                                    </div>
                                    <img class="contact-location-images" src="assets/images/contact-page/wymondham-loc.jpeg"/>
                                </div>
                                <div class="offices-item">
                                    <img class="contact-office-image" src="assets/images/contact-page/asset-45.jpeg"/>
                                    <div class="office-content">
                                        <a><h2>Great Yarmouth Office</h2></a>
                                        <p>
                                            Suite F23,<br>
                                            Beacon Innovation Centre,<br>
                                            Beacon Park, Gorleston,<br>
                                            Great Yarmouth, Norfolk<br>
                                            NR31 7RA
                                        </p>
                                        <a><h1>01493 60 32 04</h1></a>
                                        <a class="office-button">VIEW MORE</a>
                                    </div>
                                    <img class="contact-location-images" src="assets/images/contact-page/yarmouth-loc.jpeg"/>
                                </div>
                            </ul>
                        </div>
                        <div id="enquiry-container">
                            <div id="enquiry-contact-details">
                                <p><strong>Email us on:</strong><br></p>
                                <p><a href="mailto:sales@netmatters.com">sales@netmatters.com</a></p>
                                <p><strong>Business hours:</strong></p>
                                <p><strong>Monday - Friday 07:00 - 18:00&nbsp;</strong></p>
                                <a id="show-hiddent-contact-details" onclick="showHidden()">Out of hours IT support</a>
                                <div class="hidden-contact-details ">
                                    <p>Netmatters IT are offering an Out of Hours service for Emergency and Critical tasks.</p>
                                    <p><strong>Monday - Friday 18:00 - 22:00</strong></p><br>
                                    <p><strong>Saturday 08:00 - 16:00</strong></p><br>
                                    <p><strong>Sunday 10:00 - 18:00</strong></p><br>
                                    <p>To log a critical task, you will need to call our main line number and select Option 2 to leave an Out of Hours&nbsp; voicemail. A technician will contact you on the number provided within 45 minutes of your call.&nbsp;</p>
                                </div>
                            </div>  
                            <form id="enquiry-form" action="contact.php" method="post">
                                    <div id="enquiry-input-row">
                                        <label for="name" class="required">Your Name <span class="required-input">*</span></label><br>
                                        <input id="contact-name-input" name="name" class="form-name-input <?php if(isset($_SESSION['name-valid']) && !$_SESSION['name-valid'])  echo 'invalid'?>" value="<?= $_SESSION['name'] ?? '' ?>"><br>
                                        <label for="comp-name" class="required">Company Name </label><br>
                                        <input name="comp-name" value="<?= $_SESSION['company'] ?? '' ?>"><br>
                                        <label for="email" class="required">Your Email <span class="required-input">*</span></label><br>
                                        <input id="email-contact-input" name="email" class="form-name-input <?php if(isset($_SESSION['email-valid']) && !$_SESSION['email-valid'])  echo 'invalid'?>" value="<?= $_SESSION['email'] ?? '' ?>"><br>
                                        <label for="telephone-num" class="required">Your Telephone Number <span class="required-input">*</span></label><br>
                                        <input id="phone-contact-input" name="telephone-num" value="<?= $_SESSION['telephone'] ?? '' ?>" class="form-name-input <?php if(isset($_SESSION['telephone number-valid']) && !$_SESSION['telephone number-valid'])  echo 'invalid'?>"><br>
                                    </div>  
                                    <label for="message" class="required">Message <span class="required-input">*</span></label><br>
                                    <textarea id="contact-message-input" name="message" placeholder="Hi, I am interested in discussing a Our Offices solution, 
                                        could you please give me a call or send an email?" class="form-name-input <?php if(isset($_SESSION['message-valid']) && !$_SESSION['message-valid'])  echo 'invalid'?>" value="<?= $_SESSION['message'] ?? '' ?>"></textarea><br>
                                    <div class="form-group" >
                                        <label class="media">
                                            <span class="media-left checkbox-left">
                                                <span class="checkbox">
                                                    <input type="checkbox" name="marketing-checkbox" value="yes">
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
                                    <span class="enquiry-error<?php if ($_SESSION['errMsg']) echo '-active' ?>">
                                    <?php
                                        echo $_SESSION['errMsg'];
                                        unset($_SESSION['errMsg']);
                                        ?>
                                    </span>
                                    <?php
                                    if ($_SESSION['success']) {
                                        echo "<span class='Equiry-success-message'>Thank you for your enquiry</span>";
                                        unset($_SESSION['success']);
                                    }
                                    ?>
                                    <br>
                                    <button type="submit" id="enquiry-submit-button">Send Enquiry</button>
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
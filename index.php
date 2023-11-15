<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Daniel Higgins hand coded clone of NetMatters homepage">
        <meta name="keywords" content="Daniel, Higgins, Netmatters, Software, Software developer, HTML, CSS, JavaScript">
        <meta name="author" content="Daniel Higgins">
        <title>Homepage Example </title>
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
            <div id="main-content">
                <div class="banner">
                    <div id="banner-slider">
                        <div  id="first-banner" class="banner-slider-item">
                            <div class="image-cover-container">
                                <picture>
                                    <img src="assets/images/asset%203.png" alt="Netmatters office">
                                </picture>
                            </div>>
                            <div class="content" id="first-banner-content">
                                <div class="container">
                                    <div class="text">
                                        <h1>The East Of England's Leading Technology Company</h1>
                                        <p>
                                            Performance-driven digital and technology services
                                            <br>
                                            with complete transparency.
                                        </p>
                                        <a id="why-banner-btn" class="banner-btn-web" href="#">
                                            WHY CHOOSE US <i class="fa-solid fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="banner-slider-item">
                            <div class="image-cover-container">
                                <picture>
                                    <img src="assets/images/asset%204.jpeg" alt="Man smiling whilst talking through headset">
                                </picture>
                            </div>
                            <div class="content">
                                <div class="container">
                                    <div class="text">
                                        <h1>Bespoke Software</h1>
                                        <p>
                                            Delivering expert bespoke software 
                                            <br>
                                            solutions across a range of industries.
                                        </p>
                                        <a id="software-banner-btn" class="banner-btn-web" href="#">
                                            Find Out More <i class="fa-solid fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="banner-slider-item">
                            <div class="image-cover-container">
                                <picture>
                                    <img src="assets/images/asset%205.png" alt="Man fixing a desktop PC">
                                </picture>
                            </div>
                            <div class="content">
                                <div class="container">
                                    <div class="text">
                                        <h1>IT Support</h1>
                                        <p>
                                            Fast and cost-effective IT support 
                                            <br>                          
                                            services for your business.
                                        </p>
                                        <a id="support-banner-btn" class="banner-btn-web" href="#">
                                            Find Out More <i class="fa-solid fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="banner-slider-item">
                            <div class="image-cover-container">
                                <picture>
                                    <img src="assets/images/asset%206.png" alt="Woman smiling whilst working on desktop PC in unison with coworkers">
                                </picture>
                            </div>
                            <div class="content">
                                <div class="container">
                                    <div class="text">
                                        <h1>Digital Marketing</h1>
                                        <p>
                                            Generating your new business through 
                                            <br>                      
                                            results-driven marketing activities.
                                        </p>
                                        <a id="digital-banner-btn" class="banner-btn-web" href="#">
                                            Find Out More <i class="fa-solid fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="banner-slider-item">
                            <div class="image-cover-container">
                                <picture>
                                    <img src="assets/images/asset%207.png" alt="Finger pressing number on a telephone set">
                                </picture>
                            </div>
                            <div class="content">
                                <div class="container">
                                    <div class="text">
                                        <h1>Telecoms Services</h1>
                                        <p>
                                            A new approach to connectivity, see 
                                            <br>
                                            how we can help your business.
                                        </p>
                                        <a id="telecoms-banner-btn" class="banner-btn-web" href="#">
                                            Find Out More <i class="fa-solid fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="banner-slider-item">
                            <div class="image-cover-container">
                                <picture>
                                    <img src="assets/images/asset%201.jpeg" alt="Man smiling whilst in conversation">
                                </picture>
                            </div>
                            <div class="content">
                                <div class="container">
                                    <div class="text">
                                        <h1>Web Design</h1>
                                        <p>
                                            For businesses looking to make a strong 
                                            <br>                                       
                                            and effective first impression.
                                        </p>
                                        <a id="web-banner-btn" class="banner-btn-web" href="#">
                                            Find Out More <i class="fa-solid fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="banner-slider-item">
                            <div class="image-cover-container">
                                <picture>
                                    <img src="assets/images/asset%202.png" alt="Lock protecting wide range of digital devices">
                                </picture>
                            </div>
                            <div class="content">
                                <div class="container">
                                    <div class="text">
                                        <h1>Cyber Security</h1>
                                        <p>
                                            Keeping businesses and their customers
                                            <br>
                                            sensitive information protected.
                                        </p>
                                        <a id="cyber-banner-btn" class="banner-btn-web" href="#">
                                            Find Out More <i class="fa-solid fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section" id="service-section">
                    <div class="container">
                        <div class="service-list">
                            <div class="services-header">
                                <h2>
                                    <strong>Our Services</strong>
                                </h2>
                                <h3 class="service-view-work">
                                    <a href="#" onclick="homepageLink()">
                                        View Our Work <i class="fa-solid fa-arrow-right"></i>
                                    </a>
                                </h3>
                            </div>
                            <div class="row">
                                <div class="top-cards">
                                    <a class="card-software-block" href="#" onclick="homepageLink()">
                                        <span class="icon" id="software-background">
                                            <i class="fa-solid fa-laptop"></i>
                                        </span>
                                        <span class="h2">
                                            Bespoke Software 
                                        </span>
                                        <span class="p">
                                            Bespoke software solutions for all your business needs 
                                            including integrations and reporting.
                                        </span>
                                        <span class="btn-software" id="software-btn">
                                                Read More 
                                        </span>
                                    </a>
                                </div>
                                <div class="top-cards">
                                    <a class="card-it-block" href="#" onclick="homepageLink()">
                                        <span class="icon" id="it-background">
                                            <i class="fa-solid fa-desktop"></i>
                                        </span>
                                        <span class="h2">
                                            IT Support
                                        </span>
                                        <span class="p">
                                            Fully managed IT support and consultancy packages 
                                            tailored to meet your exact business needs.
                                        </span>
                                        <span class="btn-it" id="it-btn">
                                                Read More 
                                        </span>
                                    </a>
                                </div>
                                <div class="top-cards">
                                    <a class="card-digital-block" href="#" onclick="homepageLink()">
                                        <span class="icon" id="digital-background">
                                            <i class="fa-solid fa-signal"></i>
                                        </span>
                                        <span class="h2">
                                            Digital Marketing 
                                        </span>
                                        <span class="p">
                                            Driven brand awareness & ROI through creative 
                                            digital marketing campaigns.
                                        </span>
                                        <span class="btn-digital" id="digital-btn">
                                                Read More 
                                        </span>
                                    </a>
                                </div>
                                <div class="other-cards">
                                    <a class="card-telecoms-block" href="#" onclick="homepageLink()">
                                        <span class="icon" id="telecoms-background">
                                            <i class="fa-solid fa-phone-volume"></i>
                                        </span>
                                        <span class="h2">
                                            Telecoms Services 
                                        </span>
                                        <span class="p">
                                            Business telephony solutions including mobile 
                                            & connectivity solutions.
                                        </span>
                                        <span class="btn-telecoms" id="telecoms-btn">
                                                Read More 
                                        </span>
                                    </a>
                                </div>
                                <div class="other-cards">
                                    <a class="card-web-block" href="#" onclick="homepageLink()">
                                        <span class="icon" id="web-background">
                                            <i class="fa-solid fa-code"></i>
                                        </span>
                                        <span class="h2">
                                            Web Design
                                        </span>
                                        <span class="p">
                                            User-centric design for businesses looking to make 
                                            a lasting impression.
                                        </span>
                                        <span class="btn-web" id="web-btn">
                                                Read More 
                                        </span>
                                    </a>
                                </div>
                                <div class="other-cards">
                                    <a class="card-cyber-block" href="#" onclick="homepageLink()">
                                        <span class="icon" id="cyber-background">
                                            <i class="fa-solid fa-shield-halved"></i>
                                        </span>
                                        <span class="h2">
                                            Cyber Security
                                        </span>
                                        <span class="p">
                                            Prevention, testing, consultancy & breach management services.
                                        </span>
                                        <span class="btn-cyber" id="cyber-btn">
                                                Read More 
                                        </span>
                                    </a>
                                </div>
                                <div class="other-cards">
                                    <a class="card-training-block" href="#" onclick="homepageLink()">
                                        <span class="icon" id="training-background">
                                            <i class="fa-solid fa-graduation-cap"></i>
                                        </span>
                                        <span class="h2">
                                            Developer Training
                                        </span>
                                        <span class="p">
                                            Web design & software training courses designed to secure a job in tech.
                                        </span>
                                        <span class="btn-training" id="training-btn">
                                                Read More 
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <div id="services-footer">
                                <h3 class="service-view-work">
                                    <a href="#" onclick="homepageLink()">
                                        View Our Work <i class="fa-solid fa-arrow-right"></i>
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider">
                    <div id="slider-certification">
                        <div class="slider-item-container">
                            <div class="slider-item">
                                <img class="slider-certification-image" src="assets/images/asset%209.jpeg" alt="Investing in future growth award">
                            </div>
                        </div>
                        <div class="slider-item-container">
                            <div class="slider-item">
                                <img class="slider-certification-image" src="assets/images/asset%2011.jpeg" alt="Norfolk 2021 golden carbon charter certification">
                            </div>
                        </div>
                        <div class="slider-item-container">
                            <div class="slider-item">
                                <img class="slider-certification-image" src="assets/images/asset%2013.jpeg" alt="Prompt payment code certified">
                            </div>
                        </div>
                        <div class="slider-item-container">
                            <div class="slider-item">
                                <img class="slider-certification-image" src="assets/images/asset%2015.jpeg" alt="Princess royal training award 2020">
                            </div>
                        </div>
                        <div class="slider-item-container">
                            <div class="slider-item">
                                <img class="slider-certification-image" src="assets/images/asset%2017.jpeg" alt="Future 50 member certification">
                            </div>
                        </div>
                        <div class="slider-item-container">
                            <div class="slider-item">           
                                <img class="slider-certification-image" src="assets/images/asset%2019.jpeg" alt="QMS ISO 9001 : 2015 registered certification">         
                            </div>
                        </div>
                        <div class="slider-item-container">
                            <div class="slider-item">
                                <img class="slider-certification-image" src="assets/images/asset%2021.jpeg" alt="QMS ISO 27001 : 2013 registered certification">
                            </div>
                        </div>
                        <div class="slider-item-container">
                            <div class="slider-item">
                                <img class="slider-certification-image" src="assets/images/asset%2023.jpeg" alt="Skills of tommorow winner certificaiton">
                            </div>
                        </div>
                        <div class="slider-item-container">
                            <div class="slider-item">
                                <img class="slider-certification-image" src="assets/images/asset%2025.jpeg" alt="Google partner certification">
                            </div>
                        </div>
                        <div class="slider-item-container">
                            <div class="slider-item">
                                <img class="slider-certification-image" src="assets/images/asset%2027.png" alt="We are a living wage employer badge">
                            </div>
                        </div>
                        <div class="slider-item-container">
                            <div class="slider-item">
                                <img class="slider-certification-image" src="assets/images/asset%2029.png" alt="Norfolk ProHelp Badge">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="brand-background">
                    <div class="container section">
                        <div class="row">
                            <div class="col-welcome">
                                <h2 class="brand-header">
                                    Welcome To Netmatters
                                </h2>
                                <p id="company-locations">                              
                                    Netmatters is a leading 
                                    <a href="#" onclick="homepageLink()">Bespoke Software</a>
                                    ,  
                                    <a href="#" onclick="homepageLink()">IT Support</a>
                                    , and 
                                    <a href="#" onclick="homepageLink()">Digital Marketing </a>
                                    company based in the East of England with offices in 
                                    <a href="#" onclick="homepageLink()">London</a>
                                    , 
                                    <a href="#" onclick="homepageLink()">Cambridge</a>
                                    , 
                                    <a href="#" onclick="homepageLink()">Wymondham</a>
                                    , and 
                                    <a href="#" onclick="homepageLink()">Great Yarmouth</a>
                                    .           
                                </p>
                                <p>
                                    We aren't tied into contracts with third-party providers, 
                                    so you know that our recommendations for your business are 
                                    based purely with one benefit in mind: to help improve your 
                                    business with the most appropriate solutions.
                                </p>
                                <p>
                                    We pride ourselves on being an ethical business and have a 
                                    unique business offering and cost model that ensures you get 
                                    the most from our relationship in an upfront manner.
                                </p>
                                <div class="brand-buttons">
                                    <a id="btn-choose" class="btn-choose" href="#" onclick="homepageLink()">why choose us <i class="fa-solid fa-arrow-right"></i></a>
                                    <a id="btn-culture" class="btn-culture" href="#" onclick="homepageLink()">our culture <i class="fa-solid fa-arrow-right"></i></a>
                                </div>

                            </div>            
                            <div class="col-clients">
                                <h2 class="brand-header">
                                    <strong>What Our Clients Think</strong>
                                </h2>
                                <div>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <p>
                                    <span id="client-quote">
                                        Netmatters stood out from the start. Great guys and 
                                        very easy to work with. Both the build and digital marketing 
                                        teams are clearly skilled -they know their stuff! They delivered 
                                        a website to our (high!) expectations and went over and above to 
                                        ensure we were satisfied clients - and we are!
                                    </span>
                                </p>
                                <p>
                                    <span id="client-quote-author">
                                        Eleanor Bishop, Head of Marketing - 
                                        <a href="#" onclick="homepageLink()">Ashcroft Partnership LLP</a>
                                    </span>
                                </p>
                                <div class="clients-buttons">
                                    <a id="btn-google" class="btn-google" href="#" onclick="homepageLink()">Google Reviews <i class="fa-solid fa-arrow-right"></i></a>
                                    <a class="btn-trust" href="#" onclick="homepageLink()">Trustpilot reviews <i class="fa-solid fa-arrow-right"></i></a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="latest-articles">
                    <div class="section">
                        <div class="container" id="articles-container">
                            <div class="article-list">
                                <?php include("php/latestNews.php"); ?>
                                <!--
                                <div class="article-one">
                                    <a class="article-top-link" href="#" onclick="homepageLink()"></a>
                                    <div class="image-container">
                                        <div class="careers-btn btn"> Careers</div>
                                        <img class="article-image" src="assets/images/2nd-line-technician-Rnd7.png" alt="Now hiring 2nd line technician artwork">
                                    </div>
                                    <div class="block">
                                        <h3>
                                            <a href="#" onclick="homepageLink()" class="careers-title"> 2nd Line Technician </a>
                                            <span class="read-time"> - 4 minute read </span>
                                        </h3>
                                        <p>
                                            Salary Range £28k-£36k + Bonuses + Pension Hours 40 hours per week, 
                                            Monday - Friday Location Wymondh...
                                        </p>
                                        <a class="btn article-buttons" href="#" onclick="homepageLink()"> Read More </a>
                                        <div class="user">
                                            <div class="avatar">
                                                <img src="assets/images/rob-george-zFWY.png" class="article-image" alt="Picture of Rob George">
                                            </div>
                                            <div class="details">
                                                <strong class="text-primary">Posted by Rob George</strong>
                                                <br>
                                                25th July 2023 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="article-two">
                                    <a class="article-top-link" href="#" onclick="homepageLink()"></a>
                                    <div class="image-container">
                                        <a class="careers-btn" href="#" onclick="homepageLink()"> Careers</a>
                                        <img class="article-image" src="assets/images/1st-line-technician-PiSq.png" alt="Now hiring first line technician artwork">
                                    </div>
                                    <div class="block">
                                        <h3>
                                            <a href="#" onclick="homepageLink()" class="careers-title"> 1st Line Technician </a>
                                        </h3>
                                        <p>
                                            Salary Range £23k-£28k + Bonuses + 
                                            Pension Hours 40 hours per week, Monday 
                                            - Friday Location Wymondh...
                                        </p>
                                        <a class="btn article-buttons" href="#" onclick="homepageLink()"> Read More </a>
                                        <div class="user">
                                            <div class="avatar">
                                                <img src="assets/images/rob-george-zFWY.png" class="article-image" alt="Picture of Rob George">
                                            </div>
                                            <div class="details">
                                                <strong class="text-primary">Posted by Rob George</strong>
                                                <br>
                                                24th July 2023 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="article-three">
                                    <a class="article-top-link" href="#" onclick="homepageLink()"></a>
                                    <div class="image-container">
                                        <a id="receptionist-careers-btn" class="careers-btn" href="#" onclick="homepageLink()"> Careers </a>
                                        <img class="article-image" src="assets/images/receptionist-dKHK.png" alt="Now hiring receptionist artwork">
                                    </div>
                                    <div class="block">
                                        <h3>
                                            <a href="#" onclick="homepageLink()" id="receptionist-title"> Temporary Role - Receptionist </a>
                                        </h3>
                                        <p>
                                            Salary Range £21,000-£23,000 per annum Hours 40 hours per week, 
                                            Mon - Fri Location Wymondham, Norfol...
                                        </p>
                                        <a id="reception-button" class="btn article-buttons" href="#" onclick="homepageLink()"> Read More </a>
                                        <div class="user">
                                            <div class="avatar">
                                                <img src="assets/images/asset%2031.jpeg" class="article-image" alt="Picture of Bethany Shakespear">
                                            </div>
                                            <div class="details">
                                                <strong class="text-primary">Posted by Bethany Shakespear</strong>
                                                <br>
                                                14th July 2023 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider">
                    <div id="slider-outer">
                        <div id="slider-clients">
                            <div class="slider-item-container">
                                <div class="slider-item">   
                                    <div class="slider-description">
                                        <div class="slider-box">
                                            <h3>Ashcroft Partnership LLP</h3>
                                            <p>
                                                Originally founded in 2006 as Ashcroft Anthony, they became Ashcroft Partnership LLP in 2020 and
                                                are one of the top chartered accountancy firms in Cambridge, advising entrepreneurs and
                                                families.
                                            </p>
                                            <a class="slider-clients-button web-design-colour" href="#" onclick="homepageLink()">
                                                view our case study
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </a>
                                            <div class="arrow"></div>
                                        </div>
                                    </div>        
                                    <img class="slider-certification-image" src="assets/images/asset%2035.png" alt="Ashcroft company logo: Tree">         
                                </div>
                            </div>
                            <div class="slider-item-container">
                                <div class="slider-item">
                                    <div class="slider-description">
                                        <div class="slider-box">
                                            <h3>One Traveller</h3>        
                                            <p>
                                                <a href="#" onclick="homepageLink()">One Traveller</a>
                                                , founded in 2007, is a leading provider of solo holidays for over 50s.
                                            </p>
                                            <a class="slider-clients-button web-design-colour" href="#" onclick="homepageLink()">
                                                view our case study
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </a>
                                            <div class="arrow"></div>
                                        </div>
                                    </div>     
                                    <img class="slider-certification-image" src="assets/images/asset%2036.png" alt="One traveller logo: man standing proudly">
                                </div>
                            </div>
                            <div class="slider-item-container">
                                <div class="slider-item">
                                    <div class="slider-description">
                                        <div class="slider-box">
                                            <h3>Searles Leisure Resort</h3>
                                            <p>
                                                Searles Leisure Resort, on the beautiful North Norfolk coast, 
                                                is an award-winning UK holiday resort for families
                                            </p>
                                            <a class="slider-clients-button marketing-colour" href="#" onclick="homepageLink()">
                                                view our case study
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </a>
                                            <div class="arrow"></div>
                                        </div>   
                                    </div>
                                    <img class="slider-certification-image" src="assets/images/asset%2037.jpeg" alt="Searles leisure resort logo: seal bouncing ball on its head">
                                </div>
                            </div>
                            <div class="slider-item-container">
                                <div class="slider-item">
                                    <div class="slider-description">
                                        <div class="slider-box">
                                            <h3>Busseys</h3>
                                            <p>
                                                One of the UK's leading Ford dealerships.
                                            </p>
                                            <div class="arrow"></div>
                                        </div>
                                    </div>  
                                    <img class="slider-certification-image" src="assets/images/asset%2038.png" alt="Busseys logo: Busseys text in blue">
                                </div>
                            </div>
                            <div class="slider-item-container">
                                <div class="slider-item">
                                    <div class="slider-description">
                                        <div class="slider-box">
                                            <h3>Crane Garden Buildings</h3>
                                            <p>   
                                                Leading manufacturer and supplier of high-end garden rooms, 
                                                summerhouses, workshops and sheds in the UK.
                                            </p>
                                            <div class="arrow"></div>
                                        </div>
                                    </div>  
                                    <img class="slider-certification-image" src="assets/images/asset%2039.png" alt="Crane garden buildings logo: Crane flying">
                                </div>
                            </div>
                            <div class="slider-item-container">
                                <div class="slider-item">
                                    <div class="slider-description">
                                        <div class="slider-box">
                                            <h3>Black Swan Care Group</h3>        
                                            <p>
                                                Black Swan Care Group own and manage 21 high-quality care 
                                                and residential homes with a focus on putting the needs of their residents first.
                                            </p>
                                            <a class="slider-clients-button software-colour" href="#" onclick="homepageLink()">
                                                view our case study
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </a>
                                            <div class="arrow"></div>
                                        </div>
                                    </div>  
                                    <img class="slider-certification-image" src="assets/images/asset%2040.png" alt="Black Swan Care Group logo: swan floating atop water">
                                </div>
                            </div>
                            <div class="slider-item-container">
                                <div class="slider-item">
                                    <div class="slider-description">
                                        <div class="slider-box">
                                            <h3 class="no-description">Xupes</h3>
                                            <div class="arrow"></div>
                                        </div>
                                    </div>
                                    <img class="slider-certification-image" src="assets/images/asset%2041.png" alt="Xupes logo: Xupes text in black">
                                </div>
                            </div>
                            <div class="slider-item-container">
                                <div class="slider-item">
                                    <div class="slider-description">
                                        <div class="slider-box">
                                            <h3>BEAT</h3>
                                            <p>   
                                                The UK's eating disorder charity founded in 1989.
                                            </p>
                                            <div class="arrow"></div>
                                        </div>
                                    </div>
                                    <img class="slider-certification-image" src="assets/images/asset%2042.png" alt="Beat logo: Beat text in black overlaying multicoloured circles">
                                </div>
                            </div>
                            <div class="slider-item-container">
                                <div class="slider-item">
                                    <div class="slider-description">
                                        <div class="slider-box">
                                            <h3 class="no-description">Survey Solutions</h3>
                                            <div class="arrow"></div>
                                        </div>
                                    </div>
                                    <img class="slider-certification-image" src="assets/images/asset%2043.png" alt="Survery solutions logo: square split into 4 squares diagonal matching colours of light blue and aqua">
                                </div>
                            </div>
                            <div class="slider-item-container">
                                <div class="slider-item">
                                    <div class="slider-description">
                                        <div class="slider-box">
                                            <h3>Girl Guiding Anglia</h3>        
                                            <p>
                                                Girl Guiding Anglia is part of Girlguiding, the UK's leading 
                                                charity for girls and young women in the UK.
                                            </p>
                                            <a class="slider-clients-button support-colour" href="#" onclick="homepageLink()">
                                                view our case study
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </a>
                                            <div class="arrow"></div>
                                        </div>
                                    </div>
                                    <img class="slider-certification-image" src="assets/images/asset%2044.png" alt="Girl guiding anglia logo: two roughly overlaping slanted down squares">
                                </div>
                            </div>
                            <div class="slider-item-container">
                                <div class="slider-item">
                                    <div class="slider-description">
                                        <div class="slider-box">
                                            <h3>Sweetzy</h3>        
                                            <p>
                                                Sweetzy are an online sweets retailer, based in Wymondham.
                                            </p>
                                            <a class="slider-clients-button marketing-colour" href="#" onclick="homepageLink()">
                                                view our case study
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </a>
                                            <div class="arrow"></div>
                                        </div>
                                    </div>
                                    <img class="slider-certification-image" src="assets/images/asset%2045.png" alt="Sweetzy logo: Sweetzy in white with text ouline being image of sweets">
                                </div>
                            </div>
                            <div class="slider-item-container">
                                <div class="slider-item">
                                    <div class="slider-description">
                                        <div class="slider-box">
                                            <h3 class="no-description">Howes Percival</h3>
                                            <div class="arrow"></div>
                                        </div>
                                    </div>
                                    <img class="slider-certification-image" src="assets/images/asset%2046.png" alt="Howes percival logo: square split into two triangles one dark blue one yellow">
                                </div>
                            </div>
                            <div class="slider-item-container">
                                <div class="slider-item">
                                    <div class="slider-description">
                                        <div class="slider-box">
                                            <h3>GDST</h3>        
                                            <p>
                                               The <a href="#" onclick="homepageLink()">Girls' Day School Trust (GDST)</a>  is the UK's leading family
                                               of 25 independent girls' schools.                       
                                            </p>
                                            <a class="slider-clients-button marketing-colour" href="#" onclick="homepageLink()">
                                                view our case study
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </a>
                                            <div class="arrow"></div>
                                        </div>
                                    </div>
                                    <img class="slider-certification-image" src="assets/images/asset%2047.png" alt="GDST logo: GDST text in black">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php include("php/newsletter.php"); ?>
                <?php include("php/dbConnection.php"); ?>
                <?php include("php/footer.php"); ?>
            </div>
        </main>
    <script src="js/jquery-3.7.0.min.js"></script>
    <script src="js/slick/slick.js"></script>
    <script src="js/app.js"></script>
    </body>
</html>
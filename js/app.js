var didScroll;
var lastScrollTop = 0;
var delta = 20;
var navbarHeight = $(".header").outerHeight();
let width = window.innerWidth;
let open = false;
let reOpenedNav = false;



function checked () { 
    localStorage.setItem("cookieState", "true");;
    $("html").removeClass("stopScroll");
    $("#cookie-consent").css("display", "none");
} 

$(window).on("load", () => { 
    if (localStorage.getItem("cookieState") == false || localStorage.length == 0) {
        $("#cookie-consent").css("display", "flex");
        $("html").addClass("stopScroll");
    } else if (localStorage.getItem("cookieState") == true) {
        $("html").removeClass("stopScroll");
    }
})


function disableScroll() {
    // Get the current page scroll position
    scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    scrollLeft = window.pageXOffset || document.documentElement.scrollLeft,
    
        // if any scroll is attempted, set this to the previous value
        window.onscroll = function() {
            window.scrollTo(scrollLeft, scrollTop);
        };
}


function enableScroll() {
    window.onscroll = function() {};
}



function homepageLink() {
    $(".header").addClass("nav-down").removeClass("nav-up");
    $(".header").css("transition", "unset");
    reOpenedNav = false;
    $("html").scrollTop(0);
}

// on scroll, let the interval function know the user has scrolled
$(window).scroll(function(event){
    didScroll = true;
    if ($(this).scrollTop()  == 0) {
        $(".header").removeAttr("style");
        $(".header").css("transition", "unset");
        reOpenedNav = false;
    }
    if (didScroll && $(this).scrollTop() >= navbarHeight) { 
        hasScrolled();
        didScroll = false;
    }
});

window.addEventListener("resize", () => {
    width = window.innerWidth;
    if (open == true){ 
        if (width >= 992) {
            $("main").css("margin-right", "350px");
            $("main").css("margin-left", "-350px")
        } else {
            $("main").css("margin-right", "275px");
            $("main").css("margin-left", "-275px");
        }
    }
});

function hasScrolled() {

    var st = $(this).scrollTop(); 
    /*
    if (Math.abs(lastScrollTop - st) <= delta) {
        return;
    }*/

    // If current position > last position AND scrolled past navbar...
    if (st > lastScrollTop && st > navbarHeight ){
        console.log("scroll down")
        reOpenedNav = true;
        // Scroll Down
        $(".header").removeClass("nav-down").addClass("nav-up");
    } else {
        // Scroll Up
        // If did not scroll past the document (possible on mac)...
        if(reOpenedNav == true && st + $(window).height() < $(document).height()) {      
            console.log("scroll up")  
            reOpenedNav = true;
            $(".header").css("transition", "top 0.2s ease-in-out"); 
            $(".header").removeClass("nav-up").addClass("nav-down");
            $(".header").css("position", "fixed");
        }
    }

    
    lastScrollTop = st;

}

/* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
function closeNav() {
    enableScroll();
    $("#hamburger-menu-btn").removeClass("hamburger hamburger--slider is-active");
    $("main").css("margin-right", "0px").css("margin-left", "0px");
    $("#main-content > div").removeClass("unfocused");
    //$(".main-navigation").removeClass("unfocused");
    $("html").removeClass("hide-scroll-bars");  
}

/* Set the width of the sidebar to 250px and the left margin of the page content to 250px */
function openNav() {
    disableScroll();
    $("#main-content > div").addClass("unfocused");
    //$(".main-navigation").addClass("unfocused");
    $("#hamburger-menu-btn").addClass("hamburger hamburger--slider is-active");
    $("html").addClass("hide-scroll-bars");
    $("#side-nav-bar").addClass("unset-hide-scroll-bars");
    
    
    if (width >= 992) {
        $("main").css("margin-right", "350px");
        $("main").css("margin-left", "-350px");
    } else {
        $("main").css("margin-right", "275px");
        $("main").css("margin-left", "-275px");
    }

    
} 


$("#hamburger-menu-btn").on("click", () => {
    //event.stopPropagation();
    console.log("button menu")
    if (open == false) {
        openNav();
        open = true;    
    } 
    else {
        closeNav()
        open = false;
    }
})


$("#main-content").on("click", function () {
    //event.stopPropagation();
    console.log("outside mouse")
    if (open == true) {
        closeNav()
        open = false;
    }
});


/// CERTIFICATION SLIDER 
$("#slider-certification").slick({
    slidesToShow: 10,
    arrows: false,
    draggable: false,
    dots: false,
    autoplay: true,
    autoplaySpeed: 3500,
  });


/// CERTIFICATION SLIDER 
$("#slider-clients").slick({
    slidesToShow: 12,
    arrows: false,
    draggable: false,
    dots: false,
    autoplay: true,
    autoplaySpeed: 3500,
  });

$("#banner-slider").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: true,
    arrows: false,
    draggable: true,
    dots: true,
    autoplay: true,
    autoplaySpeed: 4000,
});

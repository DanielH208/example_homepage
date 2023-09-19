var didScroll;
var lastScrollTop = 0;
var delta = 20;
var navbarHeight = $(".header").outerHeight();
let width = window.innerWidth;
let open = false


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


// on scroll, let the interval function know the user has scrolled
$(window).scroll(function(event){
    didScroll = true;
    if ($(this).scrollTop()  == 0) {
        $(".header").removeAttr("style");
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
    
    if (Math.abs(lastScrollTop - st) <= delta) {
        return;
    }

    // If current position > last position AND scrolled past navbar...
    if (st > lastScrollTop && st > navbarHeight){
        console.log("scroll down")
        // Scroll Down
        $(".header").removeClass("nav-down").addClass("nav-up");
    } else {
        // Scroll Up
        // If did not scroll past the document (possible on mac)...
        if(st + $(window).height() < $(document).height()) {      
            console.log("scroll up")   
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
    $("#main-content").removeClass("unfocused");
    
    
}

/* Set the width of the sidebar to 250px and the left margin of the page content to 250px */
function openNav() {
    disableScroll();
    $("#main-content").addClass("unfocused");
    $("#hamburger-menu-btn").addClass("hamburger hamburger--slider is-active");
    
    
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

/*
$("main").on("click", function () {
    //event.stopPropagation();
    console.log("outside mouse")
    if (open == false) {
        openNav();
        open = true;    
    } 
    else {
        closeNav()
        open = false;
    }
});
*/

/// CERTIFICATION SLIDER 
$("#slider-certification").slick({
    slidesToShow: 11,
    arrows: false,
    draggable: false,
    dots: false,
    autoplay: true,
    autoplaySpeed: 2000,
  });

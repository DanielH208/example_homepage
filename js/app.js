var didScroll;
var lastScrollTop = 0;
var delta = 20;
var navbarHeight = $(".header").outerHeight();

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

function hasScrolled() {

    var st = $(this).scrollTop(); 
    
    if (Math.abs(lastScrollTop - st) <= delta) {
        console.log("broken");
        return;
    }

    // If current position > last position AND scrolled past navbar...
    if (st > lastScrollTop && st > navbarHeight){
        // Scroll Down
        $(".header").removeClass("nav-down").addClass("nav-up");
    } else {
        // Scroll Up
        // If did not scroll past the document (possible on mac)...
        if(st + $(window).height() < $(document).height()) {         
            $(".header").removeClass("nav-up").addClass("nav-down");
            $(".header").css("position", "fixed");
        }
    }

    
    lastScrollTop = st;

}


let open = false
$("#hamburger-menu-btn").on("click", () => {
    if (open == false) {
        openNav();
        open = true;
    } else {
        closeNav()
        open = false;
    }
})

/* Set the width of the sidebar to 250px and the left margin of the page content to 250px */
function openNav() {
    $("#hamburger-menu-btn").addClass("hamburger hamburger--slider is-active");
    $("#side-nav-bar").css("width", "250px");
    $("main").css("margin-right", "250px");
    $("main").css("margin-left", "-250px")
  } 
/* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
function closeNav() {
    $("#hamburger-menu-btn").removeClass("hamburger hamburger--slider is-active");
    $("#side-nav-bar").css("width",  "0px");
    $("main").css("margin-right", "0px").css("margin-left", "0px")
}
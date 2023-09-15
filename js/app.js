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



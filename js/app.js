var didScroll;
var lastScrollTop = 0;
var delta = 20;
var navbarHeight = $(".header").outerHeight();
let width = window.innerWidth;
let open = false;
let reOpenedNav = false;

function regexPassOrFail(regex, input, field) {
    if (regex.test(input)) {
        field.css("border-color", "transparent");
        return true
    } else {
        field.css("border-color", "red");
        return false
    }
}

function empty(input, field) {
    if (input == "") {
        field.css("border-color", "red");
        //field.css("border-width", "20px");
        return false
    } else {
        field.css("border-color", "transparent");
        return true
    }
}

function validateInputs() {
    //event.preventDefault(); 

    const emailRegex = new RegExp(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/);
    const nameRegex = new RegExp(/^[A-Za-z]+$/);
    const phoneRegex = new RegExp(/^\+?\(?([0-9]{2,4})[)\s\d.-]+([0-9]{3,4})([\s.-]+([0-9]{3,4}))?$/);

    let NameInput= $("#contact-name-input").val();
    let NameField = $("#contact-name-input");
    
    let userEmailInput = $("#email-contact-input").val();
    let emailField = $("#email-contact-input");
    
    
    let phoneInput= $("#phone-contact-input").val();
    let phoneField= $("#phone-contact-input");
    

    let textareaInput = $("#contact-message-input").val();
    let textareaField = $("#contact-message-input");
    
    // empty(NameInput, NameField);
    // empty(userEmailInput, emailField);
    // empty(phoneInput, phoneField);
    // empty(textareaInput, textareaField);
    // regexPassOrFail(nameRegex, NameInput, NameField);
    // regexPassOrFail(emailRegex, userEmailInput, emailField);
    // regexPassOrFail(phoneRegex, phoneInput, phoneField);
    // empty(textareaInput, textareaField);
    regexPassOrFail(nameRegex, NameInput, NameField);
    regexPassOrFail(emailRegex, userEmailInput, emailField);
    regexPassOrFail(phoneRegex, phoneInput, phoneField);
    empty(textareaInput, textareaField);
    
    if (
        regexPassOrFail(nameRegex, NameInput, NameField) &&
        regexPassOrFail(emailRegex, userEmailInput, emailField) &&
        regexPassOrFail(phoneRegex, phoneInput, phoneField) &&
        empty(textareaInput, textareaField)
    )
    { 
        return true;
    }
    else {
        return false;
    }
}


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

let hidden = true;

function showHidden() {
    if (hidden == true) {
        $(".hidden-contact-details").addClass("show-details");
        hidden = false;
    } 
    else {
        $(".hidden-contact-details").removeClass("show-details");
        hidden = true;
    }
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

    // If current position > last position AND scrolled past navbar...
    if (st > lastScrollTop && st > navbarHeight ){
        reOpenedNav = true;
        // Scroll Down
        $(".header").removeClass("nav-down").addClass("nav-up");
    } else {
        // Scroll Up
        // If did not scroll past the document (possible on mac)...
        if(reOpenedNav == true && st + $(window).height() < $(document).height()) {      
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
    $("footer").removeClass("unfocused");
    //$(".main-navigation").removeClass("unfocused");
    $("html").removeClass("hide-scroll-bars");  
}

/* Set the width of the sidebar to 250px and the left margin of the page content to 250px */
function openNav() {
    disableScroll();
    $("#main-content > div").addClass("unfocused");
    $("footer").addClass("unfocused");
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
    if (open == true) {
        closeNav()
        open = false;
    }
});





function checkbox_check() {
    $('.checkbox').css("input[type=checkbox]:checked");
}

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

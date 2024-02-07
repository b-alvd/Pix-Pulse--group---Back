window.onscroll = function() { navFunction() };

var navbar = document.getElementById("navbar");

var sticky = navbar.offsetTop;

function navFunction() {
    if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky");
        document.getElementById("navbar").style.backgroundColor = "#20202098";
    } else {
        navbar.classList.remove("sticky");
        document.getElementById("navbar").style.backgroundColor = "#202020";
    }
}
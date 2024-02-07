document.addEventListener("DOMContentLoaded", function () {
    var dropdowns = document.querySelectorAll(".dropdown");

    dropdowns.forEach(function (dropdown) {
        dropdown.addEventListener("mouseenter", function () {
            if (window.innerWidth > 768) {
                clearTimeout(this.timeoutId);
                this.querySelector(".dropdown_content").style.display = "block";
            }
        });

        dropdown.addEventListener("mouseleave", function () {
            if (window.innerWidth > 768 && !this.classList.contains("active")) {
                var dropdownContent = this.querySelector(".dropdown_content");
                this.timeoutId = setTimeout(function () {
                    dropdownContent.style.display = "none";
                }, 100);
            }
        });

        dropdown.addEventListener("click", function (event) {
            if (window.innerWidth <= 768) {
                event.preventDefault();
                this.classList.toggle("active");
                this.querySelector(".dropdown_content .sub-menu").style.display = "block";
            }
        });

        // Fermer le dropdown lors du clic en dehors du dropdown
        document.addEventListener("click", function (event) {
            if (!event.target.closest(".dropdown")) {
                dropdowns.forEach(function (dropdown) {
                    dropdown.classList.remove("active");
                    if (window.innerWidth > 768) {
                        dropdown.querySelector(".dropdown_content").style.display = "none";
                    }
                });
            }
        });
    });
});

// scrolling to anchors
function smoothScroll(target) {
    const element = document.querySelector(target);
    const offset = 80;
    const bodyRect = document.body.getBoundingClientRect().top;
    const elementRect = element.getBoundingClientRect().top;
    const elementPosition = elementRect - bodyRect;
    const offsetPosition = elementPosition - offset;

    window.scrollTo({
        top: offsetPosition,
        behavior: 'smooth'
    });
}
document.addEventListener('DOMContentLoaded', function() {
    const dropdownLinks = document.querySelectorAll('.dropdown_content a');
    dropdownLinks.forEach(link => {
        link.addEventListener('click', function(event) {
            event.preventDefault();
            const target = this.getAttribute('href');
            smoothScroll(target);
        });
    });
});
document.addEventListener("DOMContentLoaded", function () {
    var dropdowns = document.querySelectorAll(".dropdown");

    dropdowns.forEach(function (dropdown) {
        dropdown.addEventListener("mouseenter", function () {
            if (window.innerWidth > 768) { // Ajustez cette valeur selon vos besoins
                clearTimeout(this.timeoutId);
                this.querySelector(".dropdown_content").style.display = "block";
            }
        });

        dropdown.addEventListener("mouseleave", function () {
            if (window.innerWidth > 768 && !this.classList.contains("active")) { // Ajustez cette valeur selon vos besoins
                var dropdownContent = this.querySelector(".dropdown_content");
                this.timeoutId = setTimeout(function () {
                    dropdownContent.style.display = "none";
                }, 100); // Ajoutez une temporisation de 300 millisecondes (ajustable selon vos besoins)
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

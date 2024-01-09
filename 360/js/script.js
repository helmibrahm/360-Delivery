// script.js
document.addEventListener("DOMContentLoaded", function () {
    var dropdowns = document.querySelectorAll(".dropdown-content");

    dropdowns.forEach(function (dropdown) {
        var parentLink = dropdown.previousElementSibling;

        parentLink.addEventListener("click", function (event) {
            event.preventDefault();
            toggleDropdown(dropdown);
            highlightActiveLink(parentLink);
        });
    });

    function toggleDropdown(dropdown) {
        // Toggle the dropdown visibility
        dropdown.style.display = dropdown.style.display === "block" ? "none" : "block";
    }

    function highlightActiveLink(link) {
        // Remove styling from all links
        var links = document.querySelectorAll("li a");
        links.forEach(function (otherLink) {
            otherLink.parentElement.style.color = "";
        });

        // Apply styling to the clicked link's parent li
        link.parentElement.style.color = "#42BDEC";

        // Close other dropdowns when navigating to a new link
        dropdowns.forEach(function (otherDropdown) {
            if (otherDropdown !== link.nextElementSibling) {
                otherDropdown.style.display = "none";
            }
        });
    }
});

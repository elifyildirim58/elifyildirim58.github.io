// script.js

function goToSection(sectionId) {
    var section = document.getElementById(sectionId);
    if (section) {
        window.scrollTo({
            top: section.offsetTop,
            behavior: 'smooth'
        });
    }
}
// script.js


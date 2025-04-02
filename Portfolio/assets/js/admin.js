// Example: Toggle the navigation menu for smaller screens
document.addEventListener('DOMContentLoaded', () => {
    const toggleButton = document.querySelector('.header-toggle');
    const navMenu = document.querySelector('#navmenu');

    if (toggleButton && navMenu) {
        toggleButton.addEventListener('click', () => {
            navMenu.classList.toggle('active');
        });
    }
});

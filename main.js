const menuIcon = document.getElementById("menu-icon");
const navbarMenu = document.getElementById("navbar");

menuIcon.addEventListener('click', function() {
    if (navbarMenu.style.opacity == '1') {
        navbarMenu.style.opacity = '0';
        navbarMenu.style.pointerEvents = 'none';
    } else {
        navbarMenu.style.opacity = '1';
        navbarMenu.style.pointerEvents = 'auto';
    }
});




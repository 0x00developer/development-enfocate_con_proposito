/**
 * VARIABLES
 */
const btnNav = document.getElementById('btnNav');
const navList = document.getElementById('navLinks');
/**
 * FUNCTIONS
 */
/* HEADER -> MENU */
toggleNav = () => {
    navList.classList.toggle('nav-links-mf');
}
/**
 * LISTENERS
 */
eventListeners = () => {
    btnNav.addEventListener('click', toggleNav);
}
eventListeners();

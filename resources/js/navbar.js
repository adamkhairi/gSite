let menuToggle = document.getElementById('menu-toggle'),
	menu = document.getElementById('menu');

menuToggle.addEventListener('click', event => {
  menu.classList.toggle('hidden');
});
let closeMenu = document.getElementById('closeMenu');
closeMenu.addEventListener('click', event => {
	menu.classList.toggle('hidden');

});

// Nav
$(function () {
    let navbar = $('#nav');

    $(window).scroll(function () {
        if ($(window).scrollTop() <= 50) {
            navbar.removeClass('bg-gray-900');
            navbar.removeClass('shadow-md');

        } else {
            navbar.addClass('bg-gray-900');
            navbar.addClass('shadow-md');

        }
    });
});

// Toggle class active

const navbarNav = document.querySelector('.navbar-nav');

// Ketika menu di klik
document.querySelector('#menu').onclick = () => {
    navbarNav.classList.toggle('active');
};

// Klik di luar sidebar untuk menghilangkan nav
const menu = document.querySelector('#menu');

document.addEventListener('click', function(e) {
    if (!menu.contains(e.target) && !navbarNav.contains(e.target)) {
        navbarNav.classList.remove('active');
    }
});

// Efek slideshow gambar tentang kami
var i=0;
    $(document).ready(function() {
        $('#slideshow').hide();
        showNextImage();
        setInterval('showNextImage()', 3000);
    });

    function showNextImage() {
        i = (i + 1) % 7;  
        $('.slideshow').fadeOut(1100);  
        $('#pict' + (i + 1)).fadeIn(1100);  
    }

require('./bootstrap');

// Sticky navbar background
window.addEventListener('scroll', () =>
    document.querySelector('#navbar').style.opacity = (window.scrollY > 150) ? 0.9 : 1);

// Smooth scrolling
$('#navbar a, .btn').on('click', function (event) {
    if (this.hash !== '') {
        event.preventDefault();

        const hash = this.hash;

        $('html, body').animate(
            {
                scrollTop: $(hash).offset().top - 100
            },
            800
        );
    }
});

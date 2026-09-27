// Menu samping (Sidebar Menu): tombol di bar atas membuka/menutup, ikon berganti garis/silang.
(function () {
    var tombol = document.querySelector('#menu-btn');
    var tutup = document.querySelector('#close-btn');
    var sidebar = document.querySelector('#sidebar');
    var wadah = document.querySelector('.my-container');
    if (!tombol || !sidebar) {
        return;
    }
    var alih = function () {
        var buka = sidebar.classList.toggle('active-nav');
        if (wadah) {
            wadah.classList.toggle('active-cont', buka);
        }
        tombol.classList.toggle('active-button', buka);
        tombol.setAttribute('aria-expanded', buka ? 'true' : 'false');
        tombol.querySelector('.ikon-buka').classList.toggle('d-none', buka);
        tombol.querySelector('.ikon-tutup').classList.toggle('d-none', !buka);
    };
    tombol.addEventListener('click', alih);
    if (tutup) {
        tutup.addEventListener('click', alih);
    }
})();

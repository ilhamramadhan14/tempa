document.addEventListener('DOMContentLoaded', function () {
    const btnMasuk = document.getElementById('tab-masuk');
    const btnDaftar = document.getElementById('tab-daftar');
    const formMasuk = document.getElementById('form-masuk');
    const formDaftar = document.getElementById('form-daftar');
    const linkDaftar = document.getElementById('link-ke-daftar');
    const linkMasuk = document.getElementById('link-ke-masuk');

    function showMasuk() {
        btnMasuk.classList.add('active');
        btnDaftar.classList.remove('active');
        formMasuk.style.display = 'block';
        formDaftar.style.display = 'none';
        document.title = 'Masuk - TEMPA';
    }

    function showDaftar() {
        btnDaftar.classList.add('active');
        btnMasuk.classList.remove('active');
        formDaftar.style.display = 'block';
        formMasuk.style.display = 'none';
        document.title = 'Daftar - TEMPA';
    }

    btnMasuk.addEventListener('click', showMasuk);
    btnDaftar.addEventListener('click', showDaftar);
    if (linkDaftar) linkDaftar.addEventListener('click', (e) => { e.preventDefault(); showDaftar(); });
    if (linkMasuk) linkMasuk.addEventListener('click', (e) => { e.preventDefault(); showMasuk(); });
});
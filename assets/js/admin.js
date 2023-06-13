document.addEventListener("DOMContentLoaded", function () {
    // Ambil elemen header
    var header = document.querySelector("header");

    // Tambahkan class "sticky" ke header ketika pengguna menggulir ke bawah
    window.addEventListener("scroll", function () {
        if (window.pageYOffset > 0) {
            header.classList.add("sticky");
        } else {
            header.classList.remove("sticky");
        }
    });
});
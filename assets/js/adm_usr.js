$(document).ready(function () {
    // Activate tooltip
    $('[data-toggle="tooltip"]').tooltip();

    // Select/Deselect checkboxes
    var checkbox = $('table tbody input[type="checkbox"]');
    $("#selectAll").click(function () {
        if (this.checked) {
            checkbox.each(function () {
                this.checked = true;
            });
        } else {
            checkbox.each(function () {
                this.checked = false;
            });
        }
    });
    checkbox.click(function () {
        if (!this.checked) {
            $("#selectAll").prop("checked", false);
        }
    });
});

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
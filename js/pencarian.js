// var $rows = $('#table tr'); <!--berfungsi untuk menampung nilai yang berda di dalam tabel-->

// $('#search').keyup(function()<!--proses pengolahan nilai inputan--> {
//     var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();
//     <
//     $rows.show().filter(function() {
//         var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
//         return !~text.indexOf(val);
//     }).hide();
// });function openSearch() {
function openSearch() {
    document.getElementById("cari").style.display = "block";
}

function closeSearch() {
    document.getElementById("myOverlay").style.display = "none";
}
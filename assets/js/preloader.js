// Add easy pre-loader to your website
// http://www.owlreporter.com/?p=1534

var p = document.createElement("div");
p.innerHTML = "<div style='z-index:100000' id='owlreporter-preloader'><div id='loader'></div><div class='loader-section section-left'></div><div class='loader-section section-right'></div></div>";
document.body.insertBefore(p, document.body.firstChild);

function pageload() {

}
window.onload = function() { pageload() }, setTimeout(function() { document.body.className += "loaded" }, 1500);
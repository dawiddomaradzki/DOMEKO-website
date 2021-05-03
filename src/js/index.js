import "../scss/main.scss";

// uncomment the lines below to enable PWA
// import {registerSW} from './pwa.js';
// registerSW();

/* place your code below */

console.log(
  "Cześć, miło że zajrzałeś 🤠 nazywam się Dawid Domaradzki a wyświetlana strona to mój projekt. Zapraszam https://dawiddomaradzki.github.io/"
);

$(document).ready(function () {
  $(".click").click(function (event) {
    event.stopPropagation();
    $(".showup").slideToggle("fast");
  });
  $(".showup").on("click", function (event) {
    event.stopPropagation();
  });
});

$(document).on("click", function () {
  $(".showup").hide();
});

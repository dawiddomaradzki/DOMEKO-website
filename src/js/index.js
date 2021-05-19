import "../scss/main.scss";

/* place your code below */

console.log(
  "Cześć, miło że zajrzałeś 🤠 nazywam się Dawid Domaradzki a wyświetlana strona to mój projekt. Zapraszam https://dawiddomaradzki.github.io/"
);

//zapobieganie wysyłania ponownie formularza na skrzynke po odświeżeniu
if (window.history.replaceState) {
  window.history.replaceState(null, null, window.location.href);
}

//jquery dla rozwijanego menu
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

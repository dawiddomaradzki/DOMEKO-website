import "../scss/main.scss";

// uncomment the lines below to enable PWA
// import { registerSW } from "./pwa.js";
// registerSW();

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

const slideShowImages = document.querySelectorAll(
  ".imgSection__wrapper .imgSection__slideshowImg"
);
const nextImageDelay = 6000;
let currentImageCounter = 0;

slideShowImages[currentImageCounter].style.opacity = 1;
setInterval(nextImage, nextImageDelay);

function nextImage() {
  slideShowImages[currentImageCounter].style.zIndex = -2;
  const tempCounter = currentImageCounter;

  setTimeout(() => {
    slideShowImages[tempCounter].style.opacity = 0;
  }, 1000);

  currentImageCounter = (currentImageCounter + 1) % slideShowImages.length;
  slideShowImages[currentImageCounter].style.opacity = 1;
  slideShowImages[currentImageCounter].style.zIndex = -1;
}

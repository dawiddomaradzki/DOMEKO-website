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

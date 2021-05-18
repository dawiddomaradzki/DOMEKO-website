<?php

if(isset($_POST['email']) && $_POST['email'] !=''){

if( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		$userName = $_POST['name'];
		$userEmail = $_POST['email'];
		$messageSubject = $_POST['subject'];
		$message = $_POST['message'];

		$to = "test@domeko.nazwa.pl";
		$body = "";

		$body .= "Od: ".$userName. "\r\n";
		$body .= "Email: ".$userEmail. "\r\n";
		$body .= "Wiadomość: ".$message. "\r\n";

		mail($to,$messageSubject,$body);

  }
}

?>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DOMEKO: Salon Łazienek</title>
    <meta name="description" content="Your project description" />
    <!-- Title -->
    <meta property="og:title" content="DOMEKO Salon Łazienek" />
    <!-- This is the first commercial project created by Dawid Domaradzki. Page of DOMEKO industrial wholesaler.  -->
    <meta property="og:description" content="" />
    <!-- full url with http(s) ie. https://github.com/dawiddomaradzki/DOMEKO-website -->
    <meta property="og:url" content="" />
    <!-- full url to the image with http(s) ie. https://maciejkorsan.github.io/my-repo/assets/img/fb.png. Facebook suggests at least 1200 x 630. -->
    <meta property="og:image" content="" />

    <link
      rel=" shortcut icon"
      href="favicon-32x32.png"
      type="image/x-icon"
      sizes="16x16"
    />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script
      src="https://code.jquery.com/jquery-3.5.1.js"
      integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
      crossorigin="anonymous"
    ></script>
  </head>
  <body id="top">
    <div class="navWrapper">
      <nav>
        <div class="navigationLogo">
          <a href="index.html" title="domeko logo">
            <img src="img/Domeko_czarny32px.2599e721.svg" alt="DOMEKO logo" />
          </a>
        </div>

        <ul class="navigationList">
          <li class="navigationList__list">
            <a href="#">O nas</a>
          </li>
          <li class="navigationList__list">
            <a href="#content">Oferta</a>
          </li>
          <li class="navigationList__list">
            <a href="#footer">Kontakt</a>
          </li>

          <li class="navigationList__list click">
            <p>Projekty <i class="fas fa-angle-down"></i></p>
            <ul class="navigationList__dropdown showup">
              <li><a href="gallery.html">Wizualizacje</a></li>
              <li><a href="realized.html">Realizacje</a></li>
              <li><a href="#">Wideo</a></li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>

    <section class="imgSection">
      <div class="imgSection__wrapper">
        <div class="imgSection__wrapper--image"></div>
      </div>
    </section>

    <section class="formSection">
      <h1 class="headers">Napisz do nas!</h1>
      <div class="formSection__wrapper">
        <form class="contactForm" method="POST" action="form.php">
          <input
            type="text"
            name="name"
            class="contactForm__input"
            placeholder="Your Name"
            required
          />
          <input
            type="email"
            name="email"
            class="contactForm__input"
            placeholder="Your email"
            required
          />
          <input
            type="text"
            name="subject"
            class="contactForm__input"
            placeholder="Topic"
            required
          />

          <textarea
            name="message"
            placeholder="message"
            class="contactForm__input"
            rows="10"
            required
          ></textarea>

          <button
            type="submit"
            class="contactForm__input contactForm__input--submit"
          >
            Wyślij Wiadomość
            </button>
        </form>
      </div>
    </section>

    <section class="footer" id="footer">
      <div class="footer__container">
        <article class="information">
          <h2 class="information__title">KONTAKT</h2>

          <ul class="information__list">
            <li class="information__element information__call">
              <a href="tel:+41 394 58 47" class="information__noStyle"
                >+41 394 58 47</a
              >
            </li>
            <li class="information__element information__email">
              <a href="mailto:info@domeko.eu" class="information__noStyle"
                >info@domeko.eu</a
              >
            </li>
            <li class="information__element information__facebook">
              <a
                href="https://www.facebook.com/Domeko-W%C5%82oszczowa-564951136912778/"
                target="blank"
                class="information__noStyle"
                >facebook</a
              >
            </li>
          </ul>
        </article>

        <article class="information">
          <h2 class="information__title">GODZINY PRACY</h2>

          <ul class="information__list">
            <li class="information__element information__opening">
              pn-pt: 08:00 - 17:00
            </li>
            <li class="information__element">sb: 08:00 - 14:00</li>
            <li class="information__element">nd: nieczynne</li>
          </ul>
        </article>

        <article class="information">
          <h2 class="information__title">LOKALIZACJA</h2>

          <ul class="information__list information__hover">
            <li class="information__element information__location">
              <a
                href="https://goo.gl/maps/fjd2s9bmYHuYsVnN9"
                target="blank"
                class="information__noStyle"
                >ul. Przedborska 45</a
              >
            </li>
            <li class="information__element">
              <a
                href="https://goo.gl/maps/fjd2s9bmYHuYsVnN9"
                target="blank"
                class="information__noStyle"
                >29-100 Włoszczowa</a
              >
            </li>
          </ul>
        </article>
      </div>
      <div class="footer__photoWrapper">
        <img
          class="footer__photoWrapper--line"
          src="img/Domeko_bialy20px.7b9afee5.svg"
          alt="Domeko footer"
        />
      </div>
    </section>
  </body>
</html>

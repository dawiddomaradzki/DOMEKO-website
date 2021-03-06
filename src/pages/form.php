<?php
$message_sent = false;
if(isset($_POST['email']) && $_POST['email'] !=''){

if( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		$userName = $_POST['name'];
		$userEmail = $_POST['email'];
		$messageSubject = $_POST['subject'];
		$message = $_POST['message'];

		$to = "info@domeko.eu";
		$body = "";

		$body .= "Od: ".$userName. "\r\n";
		$body .= "Email: ".$userEmail. "\r\n";
		$body .= "Wiadomosc: ".$message. "\r\n";

		mail($to,$messageSubject,$body);

    $message_sent = true;
  }
}

?>

<html lang="pl">
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
          <a href="index.html" title="Domeko" rel="nofollow noreferrer">
            <img src="img/Domeko_czarny32px.2599e721.svg" alt="DOMEKO" />
          </a>
        </div>

        <ul class="navigationList">
          <li class="navigationList__list">
            <a href="about.html" rel="nofollow noreferrer">O nas</a>
          </li>
          <li class="navigationList__list">
            <a href="#content" rel="nofollow noreferrer">Oferta</a>
          </li>
          <li class="navigationList__list">
            <a href="#footer" rel="nofollow noreferrer">Kontakt</a>
          </li>

          <li class="navigationList__list click">
            <p>Galeria <i class="fas fa-angle-down"></i></p>
            <ul class="navigationList__dropdown showup">
              <li><a href="gallery.html" rel="nofollow noreferrer">Wizualizacje</a></li>
              <li><a href="realized.html" rel="nofollow noreferrer">Realizacje</a></li>
              <li><a href="assortment.html" rel="nofollow noreferrer">Asortyment</a></li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>

    <section class="imgSection">
      <header>
        <div class="imgSection__wrapper">
          <img
            src="../assets/img/front.png"
            alt=""
            class="imgSection__slideshowImg"
          />
          <img
            src="../assets/img/00.jpg"
            alt=""
            class="imgSection__slideshowImg"
          />
          <img
            src="../assets/img/1.png"
            alt=""
            class="imgSection__slideshowImg"
          />
          <img
            src="../assets/img/2.png"
            alt=""
            class="imgSection__slideshowImg"
          />
          <img
            src="../assets/img/3.png"
            alt=""
            class="imgSection__slideshowImg"
          />
        </div>
      </header>
    </section>

    <section class="content" id="content">
      <h1 class="headers headers__offer">W salonie oferujemy</h1>
      <article class="content__offer">
        <div class="services">
          <div class="services__wrapper">
            <img
              src="img/slab.b0a52537.png"
              alt="slab"
              class="services__image"
            />
            <h2 class="services__header">Płytki</h2>
            <p>
              Posiadamy w ofercie szeroką gamę płytek w wielu
              formatach oraz wzorach odpowiadających nowoczesnym trendom. Nasze
              płytki to produkty najwyższej jakości producentów z wieloletnim
              doświadczeniem na rynku.
            </p>
          </div>
        </div>
        <div class="services">
          <div class="services__wrapper">
            <img
              src="img/visualization.900c168c.png"
              alt="visualisation"
              class="services__image"
            />
            <h2 class="services__header">Wizualizacje łazienek</h2>
            <p>
              Wykonujemy wizualizacje łazienek na życzenie klienta. Dzięki nim w
              łatwy sposób wyobrazisz sobie, jak dobrane przez nas komponenty
              będą ze sobą współgrać w końcowym projekcie.
            </p>
          </div>
        </div>
        <div class="services">
          <div class="services__wrapper">
            <img
              src="img/door.d2e58f95.png"
              alt="door"
              class="services__image"
            />
            <h2 class="services__header">Okna i drzwi</h2>
            <p>
              W naszym salonie znajdą Państwo wiele modeli okien oraz drzwi
              zarówno tych zawnętrznych jak i wewnętrznych. Oferujemy również
              ich transport i montaż u klienta.
            </p>
          </div>
        </div>
        <div class="services">
          <div class="services__wrapper">
            <img
              src="img/budowlanka.1c69b1f9.png"
              alt="fireplace"
              class="services__image"
            />
            <h2 class="services__header">Artykuły budowlane</h2>
            <p>
              W salonie posiadamy studio Dekoral, które pozwoli na dobór oraz
              wymieszanie wybranych tynków i farb. Oferujemy również różnego
              rodzaju wyposażenie wnętrz oraz artykuły budowalne takie jak:
              armatura łazienkowa, materiały wykończeniowe, akcesoria remontowe
              i nie tylko!
            </p>
          </div>
        </div>
      </article>

      <h1 class="headers headers__walk">Wirtualny spacer po naszym salonie</h1>
      <article>
        <div>
          <iframe
            src="https://www.google.com/maps/embed?pb=!4v1620040265795!6m8!1m7!1sCAoSLEFGMVFpcE00bmpURnMtZldWMmExS3A3SU9PZzlZbmlaRUJPZzNPM2ExR3l4!2m2!1d50.85807401677135!2d19.96952223984931!3f317.84689402229503!4f-14.190888564753095!5f0.7820865974627469"
            width="100%"
            height="600"
            style="border: 1px solid black"
            allowfullscreen=""
            loading="lazy"
          ></iframe>
        </div>
      </article>
    </section>

    <section class="formSection" id="thanks">
    
      <?php
        if($message_sent):
      ?>
        <h2  class="formSection__header">Dziękujemy za wiadomość!</h2>
      <?php
        else:
      ?>
      <h1 class="headers headers__form">Napisz do nas!</h1>
      <form method="POST" action="form.php#thanks">
        <div class="formSection__wrapper">
          <div class="form">
            <input type="text" name="name" required />
            <label for="name" class="labelName"
              ><span class="contentName">Imię</span></label
            >
          </div>
        </div>
        <div class="formSection__wrapper">
          <div class="form">
            <input type="email" name="email" required />
            <label for="email" class="labelName"
              ><span class="contentName">Email</span></label
            >
          </div>
        </div>
        <div class="formSection__wrapper">
          <div class="form">
            <input type="text" name="subject" required />
            <label for="subject" class="labelName"
              ><span class="contentName">Temat</span></label
            >
          </div>
        </div>
        <div class="formSection__wrapper formSection__textarea">
          <textarea
            name="message"
            placeholder="Wiadomość"
            cols="30"
            rows="10"
            required
          ></textarea>
        </div>
        <div class="formSection__wrapper">
          <button type="submit" class="formSection__wrapper--button">
            Wyślij wiadomość
          </button>
        </div>
      </form>
      <?php
      endif;
      ?>
    </section>

    <section class="footer" id="footer">
      <div class="footer__container">
        <article class="information">
          <h2 class="information__title">KONTAKT</h2>

          <ul class="information__list">
            <li class="information__element information__call">
              <a href="tel:+41 394 58 47" class="information__noStyle"
                rel="nofollow noreferrer">+41 394 58 47</a
              >
            </li>
            <li class="information__element information__email">
              <a href="mailto:info@domeko.eu" class="information__noStyle"
                rel="nofollow noreferrer">info@domeko.eu</a
              >
            </li>
            <li class="information__element information__facebook">
              <a
                href="https://www.facebook.com/Domeko-W%C5%82oszczowa-564951136912778/"
                target="blank"
                class="information__noStyle"
                rel="nofollow noreferrer"
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
                rel="nofollow noreferrer"
                >ul. Przedborska 45</a
              >
            </li>
            <li class="information__element">
              <a
                href="https://goo.gl/maps/fjd2s9bmYHuYsVnN9"
                target="blank"
                class="information__noStyle"
                rel="nofollow noreferrer"
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

<?php
require_once ("Templates\header.php");
?>
<!--Slider-->

    <article id="slides">
      <section aria-label="Newest Articles">
        <div class="carousel" data-carousel>
          <button data-carousel-button="next" class="carousel-button next">
            &#62;
          </button>
          <button data-carousel-button="prev" class="carousel-button prev">
            &#60;
          </button>
          <ul data-slides>
            <li class="slide" data-active>
              <img src="assets/carrossorie.webp" alt="" />
              <div class="caption">
                <h2 class="img-header">Carrossorie</h2>
                <p class="img-text">Meilleurs services par nos experts</p>
                <button class="btn cap-button">En Savoir Plus</button>
              </div>
            </li>
            <li class="slide">
              <img src="assets/entretien.webp" alt="" />
              <div class="caption">
                <h2 class="img-header">Entretien</h2>
                <p class="img-text">
                  Évitez tous les imprévus avec un visite régulier
                </p>
                <button class="btn cap-button">En Savoir Plus</button>
              </div>
            </li>
            <li class="slide">
              <img src="assets/occasion.webp" alt="" />
              <div class="caption">
                <h2 class="img-header">Occasion</h2>
                <p class="img-text">
                  Vous accompagner afin d'obtenir le Meilleur choix
                </p>
                <button class="btn cap-button">En Savoir Plus</button>
              </div>
            </li>
          </ul>
        </div>
      </section>
    </article>

<!--The summary of services-->

<section id="summary">
  <div class="containter-fluid reveal">
    <h2 class="text-center">Bienvenue au Garage V.Parrot</h2>
    <div class="row">
      <div class="col-sm-6 col-md-4">
        <img class="exp img-fluid offset-5" src="assets\later\15years.png" alt="">
        <p class="body-text text-center">Nos experts possèdent une solide expérience dans le secteur des garages, où ils
          ont développé une expertise approfondie en matière de réparation et d'entretien de véhicules.</p>
      </div>
      <div class="col-sm-6 col-md-4">
        <img class="exp img-fluid offset-5" src="assets\later\servicegaranti.webp" alt="">
        <p class="body-text text-center">Notre garantie de service témoigne de notre confiance envers notre expertise et
          la qualité de notre travail, assurant que votre véhicule est entre de bonnes mains avec nos professionnels
          expérimentés et équipements de pointe.</p>
      </div>
      <div class="col-sm-6 col-md-4">
        <img class="exp img-fluid offset-5" src="assets\later\cardeal.png" alt="">
        <p class="body-text text-center">Notre service de vente et d'achat de voitures d'occasion vous offre une
          expérience pratique et fiable pour trouver la voiture idéale, soutenu par notre expertise et notre sélection
          de véhicules de qualité.</p>
      </div>
    </div>
  </div>
</section>

<!--Booking --><!--&--><!--Formulaire-->
 <section id="reservation">
        <div class="container">
          <div class="row">
            <h2 class="titles text-center">Réservation</h2>
            <div class="col-lg-6">
              <img class="booking" src="assets/booking.jpg" alt="booking">
            </div>
            <?php require_once('formulaire.php'); ?>
            </div>
          </div>
        </div>
  </section>
  
  <!--Temoinage-->
  <section id="testimonial">
    <div class="container text-center reveal">
      <h2 class="text-center">Témoinage</h2>
      <div class="row ">
        <div class="col-sm-6 col-md-4">
          <div class="try">
            <img class="client-picture offset-5 img-fluid" src="assets\1.jpeg" alt="">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <p>Lucie <strong>GOUIN</strong></p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam repellendus eius, provident recusandae
              debitis inventore tempora in, eligend.</p>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <img class="client-picture offset-5 img-fluid" src="assets\2.jpeg" alt="">
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <p>Ali <strong>AKBARI</strong></p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam repellendus eius, provident recusandae
            debitis inventore tempora in, eligend.</p>
        </div>
        <div class="col-sm-6 col-md-4">
          <img class="client-picture offset-5 img-fluid" src="assets\3.jpeg" alt="">
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <p>Jean <strong>DOMINIQUE</strong></p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam repellendus eius, provident recusandae
            debitis inventore tempora in, eligend.</p>
        </div>
      </div>
    </div>

  </section>

  </main>

  <script src="scripts\script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
  </body>

  </html>
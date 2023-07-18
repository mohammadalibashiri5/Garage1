<?php
require_once ('../templates/header.php');
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
              <img src="..\assets\images\slides\carrossorie.webp" alt="" />
              <div class="caption">
                <h2 class="img-header">Carrossorie</h2>
                <p class="img-text">Meilleurs services par nos experts</p>
                <button class="btn cap-button">En Savoir Plus</button>
              </div>
            </li>
            <li class="slide">
              <img src="..\assets\images\slides\entretien.webp" alt="" />
              <div class="caption">
                <h2 class="img-header">Entretien</h2>
                <p class="img-text">
                  Évitez tous les imprévus avec un visite régulier
                </p>
                <button class="btn cap-button">En Savoir Plus</button>
              </div>
            </li>
            <li class="slide">
              <img src="..\assets\images\slides\occasion.webp" alt=""/>
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
        <img class="exp img-fluid offset-5" src="..\assets\images\logos\15years.png" alt="">
        <p class="body-text text-center">Nos experts possèdent une solide expérience dans le secteur des garages, où ils
          ont développé une expertise approfondie en matière de réparation et d'entretien de véhicules.</p>
      </div>
      <div class="col-sm-6 col-md-4">
        <img class="exp img-fluid offset-5" src="..\assets\images\logos\servicegaranti.webp" alt="">
        <p class="body-text text-center">Notre garantie de service témoigne de notre confiance envers notre expertise et
          la qualité de notre travail, assurant que votre véhicule est entre de bonnes mains avec nos professionnels
          expérimentés et équipements de pointe.</p>
      </div>
      <div class="col-sm-6 col-md-4">
        <img class="exp img-fluid offset-5" src="..\assets\images\logos\cardeal.png" alt="">
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
              <img class="booking" src="..\assets\images\others\booking.jpg" alt="booking">
            </div>
            <?php require_once('C:\xampp\htdocs\GARAGE1\formulaire.php'); ?>
            </div>
          </div>
        </div>
  </section>
  
  <!--Temoinage-->
  <section id="testimonial">
    <div class="container text-center reveal">
      <h2 class="text-center titles">Témoinage</h2>
      <div class="row ">
        <div class="col-sm-6 col-md-4">
          <div class="try">
            <img class="client-picture offset-5 img-fluid" src="..\assets\images\others\1.jpeg" alt="">
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
          <img class="client-picture offset-5 img-fluid" src="..\assets\images\others\2.jpeg" alt="">
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
          <img class="client-picture offset-5 img-fluid" src="..\assets\images\others\3.jpeg" alt="">
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
    <!--Newsletter-->
    <section id="newsletter">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <h2 class="titles text-center">
                        <i>Inscrivez-vous à notre newsletter !</i>
                    </h2>
                    <div class="col-6">
                        <form>
                            <div class="mb-3">
                                <label for="email" class="form-label"
                                    >Votre adresse mail</label
                                >
                                <input
                                    type="email"
                                    class="form-control"
                                    id="email"
                                />
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row justify-content-end">
                    <div class="col-4 mb-3">
                        <button type="submit" class="btn btn-primary">
                            S'inscrire
                        </button>
                    </div>
                </div>
            </div>
</section>
  </main>
  <?php require_once('..\templates\footer.php'); ?>

  <script src="..\scripts\script.js"></script>
  </body>

  </html>
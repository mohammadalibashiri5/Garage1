<?php require_once('../templates/header.php'); ?>

      <!--Form-->
        <div class="col-lg-6 mt-2 rounded bg-info-subtle">
      <form action="" id="myForm" method="post" novalidate>
        <div class="row g-3">
          <div class="col m-3">
            <label for="first-name" class="form-label">Votre Prénom</label>
            <input
              required
              type="text"
              class="form-control"
              name="prénom"
              id="first-name"
              onfocusout="validateFirstName()"
            />
            <span class="helper-text"></span>
          </div>
          <div class="col m-3">
            <label for="last-name" class="form-label">Votre Nom</label>
            <input
              required
              type="text"
              class="form-control"
              name="nom"
              id="last-name"
              onfocusout="validateLastName()"
            />
            <span class="helper-text"></span>
          </div>
        </div>
        <div class="row g-3">
          <div class="col m-3">
            <label for="number" class="form-label"
              >Votre Numéro de téléphone</label
            >
            <input
              required
              type="tel"
              class="form-control"
              name="numéro de téléphone"
              id="number"
              onfocusout="validateNumber()"
            />
            <span class="helper-text"></span>
            <span class="exemple">Par exemple :0749122970</span>
          </div>
          <div class="col m-3">
            <label for="email" class="form-label">Votre Adresse Mail</label>
            <input
              type="email"
              class="form-control"
              id="email"
              name="adresse mail"
              onfocusout="validateEmail()"
            />
            <span class="helper-text"></span>
          </div>
        </div>
        <div class="row g-3">
          <div class="col-md-4 m-3">
            <label for="service" class="form-label"
              >Selectioner le service</label
            >
            <select class="form-select" name="service" id="service">
              <option value="repair">Réparation</option>
              <option value="maintenance">Entretien Régulier</option>
              <option value="second-hand">Occasion</option>
            </select>
          </div>
          <div class="col-md-7 m-3">
            <label class="form-label" for="comment">Ecrivez nous</label>
            <textarea
              class="form-control"
              name=""
              id="comment"
              cols="30"
              rows="5"
              style="resize: none"
              placeholder="Votre commentaire ici"
            ></textarea>
          </div>
        </div>
        <div class="row justify-content-end">
            <div class="col-auto">
        <button id="submit" type="submit" class="btn btn-primary m-2">
          <span
            class="spinner-border spinner-border-sm d-none"
            role="status"
            aria-hidden="true"
          ></span>
          Envoyer
        </button>
    </div>
</div>
        <div
          id="success-message"
          class="alert alert-success d-none"
          role="alert"
        >
          Votre Demande est bien prise en compte !
        </div>
      </form>
    </div>
    </div>
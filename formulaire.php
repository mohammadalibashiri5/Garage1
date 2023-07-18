<?php require_once('../templates/header.php'); ?>
<div class="col-lg-3">
              <form action="" id="myForm" method="post">
                <div class="m-3">
                  <label for="first-name" class="form-label">Votre Prénom</label>
                  <input required type="text" class="form-control" id="first-name">
                </div>
                <div class="m-3">
                  <label for="last-name" class="form-label">Votre Nom</label>
                  <input required type="text" class="form-control" id="last-name">
                </div>
                <div class="m-3">
                  <label for="number" class="form-label">Votre Numéro de téléphone</label>
                  <input required type="tel" class="form-control" name="phone-number" id="number">
                </div>
                </div>
               <div class="col-lg-3">
                <div class="m-3">
                  <label for="email" class="form-label">Votre Adresse Mail</label>
                  <input type="email" class="form-control" id="email" >                
                </div>
                <div class="m-3">
                  <label for="service" class="form-label">Selectioner le service</label>
                  <select class="form-select" name="service" id="service">
                    <option value="repair">Réparation</option>
                    <option value="maintenance">Entretien Régulier</option>
                    <option value="second-hand">Occasion</option>
                  </select>
                </div>
                <button id="submit" type="submit" class="btn btn-primary m-3">Envoyer</button>
              </form>

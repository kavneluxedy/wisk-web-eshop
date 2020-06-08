<!-- <div class="form-group">
                  <label for="acc_username">Prénom
                     <input type="text" class="form-control" name="acc_fname">
                     <//?= form_error('acc_username'); ?>
                  </label>
               </div>

               <div class="form-group">
                  <label for="acc_username">Nom
                     <input type="text" class="form-control" name="acc_lname">
                     <//?= form_error('acc_username'); ?>
                  </label>
               </div> -->
<!-- 
-------------------------------------------------------------------------------------
FORMULAIRE
-------------------------------------------------------------------------------------
 -->
<div class="container">
   <div class="row">
      <form class="shadow transition border border-dark p-4" method="POST" action="<?= base_url('User/create'); ?>" id="form">

         <div class="form-group ">

            <div class="form-group row">
               <label for="acc_username" class="col-sm-2 col-form-label">Identifiant</label>
               <div class="col-sm-10">
                  <input type="text" class="form-group bg-dark text-warning shadow transition" name="acc_username" placeholder="Enter your login" min="3" max="50">
               </div>
               <!-- <div class="alert alert-danger"><?php echo form_error('acc_username'); ?></div> -->
            </div>

            <div class="form-group row">
               <label for="acc_email" class="col-sm-2 col-form-label">Email</label>
               <div class="col-sm-10">
                  <input type="email" class="form-group bg-dark text-warning shadow transition" id="acc_email" name="acc_email" placeholder="Example@domain.com">
               </div>
               <!-- <div class="alert alert-danger"><?php echo form_error('acc_email'); ?></div> -->
            </div>

            <div class="form-group row">
               <label for="acc_pass" class="col-sm-2 col-form-label">Mot de passe</label>
               <div class="col-sm-10">
                  <input type="password" class="form-group bg-dark text-warning shadow transition" id="acc_pass" name="acc_pass" placeholder="8 characters required">
               </div>
               <!-- <div class="alert alert-danger"><?php echo form_error('acc_pass'); ?></div> -->
            </div>

            <div class="form-group row">
               <label for="acc_passconf" class="col-sm-2 col-form-label">Mot de passe de confirmation</label>
               <div class="col-sm-10">
                  <input type="password" class="form-group bg-dark text-warning shadow transition" id="acc_pass" name="acc_passconf" placeholder="8 characters required">
               </div>
               <!-- <div class="alert alert-danger"><?php echo form_error('acc_passconf'); ?></div> -->
            </div>

         </div>

         <fieldset class="form-group">
            <div class="row">
               <legend class="col-form-label col-sm-2 pt-0">Question secrète</legend>
               <div class="col-sm-10">
                  <div class="form-check">
                     <input class="form-check-input" type="radio" name="secret_id" id="secret_id" value="1" checked>
                     <!-- <?php echo form_error('secret_id'); ?> -->
                     <label class="form-check-label" for="secret_id">
                        Quel est le nom de jeune fille de votre mère ?
                     </label>
                  </div>

                  <div class="form-check">
                     <input class="form-check-input" type="radio" name="secret_id" id="secret_id" value="2"><?php set_value('secret_id'); ?>
                     <label class="form-check-label" for="secret_id">
                        Quel est le nom de votre animal de compagnie ?
                     </label>
                  </div>

               </div>
            </div>
         </fieldset>

         <div class="form-group">
            <div class="col-sm-10">
               <button type="submit" class="btn btn-warning">Envoyer</button>
            </div>
            <div class="col-sm-10">
               <input type="reset" class="btn btn-danger"></input>
            </div>
         </div>

      </form>
   </div>
</div>



<!-- <div class="row">
   <div class="col-12">
      <form class='' method="POST" action="<?= base_url('User/create'); ?>" id="form">
                     <fieldset class="col-12 bg-dark p-3">

                        <div class="d-flex flex-row justify-content-baseline">

                           <label for="acc_username" class="text-warning">Identifiant
                              <input type="text" class="form-group shadow transition" name="acc_username" placeholder="Enter your login" min="3" max="50">
                              <?= form_error('acc_username'); ?>
                           </label>

                           <label for="acc_pass" class="text-warning">Mot de passe
                              <input type="password" class="form-group shadow transition" name="acc_pass" placeholder="8 characters required">
                              <?= form_error('acc_pass'); ?>
                           </label>

                           <label for="acc_passconf" class="text-warning">Confirmation du mot de passe
                              <input type="password" class="form-group shadow transition" name="acc_passconf" placeholder="8 characters required">
                              <?= form_error('acc_passconf'); ?>
                           </label>

                        </div>

                        <div class="d-flex flex-row justify-content-end">
                           <label for="acc_email">Email
                              <input type="email" id="acc_email" class="form-group shadow transition" name="acc_email" placeholder="Example@domain.com">
                              <?= form_error('acc_email'); ?>
                           </label>

                           <label for="secret_id">Question secrète
                              <input type="radio" class="shadow transition m-1" name="secret_id" value="1">1</input>
                              <input type="radio" class="shadow transition m-1" name="secret_id" value="2">2</input>
                              <?= form_error('secret_id'); ?>
                           </label>

                        </div>

                        <label for="submit">
                           <input type="submit" id="submit" class="btn btn-dark bg-dark text-warning"></input>
                        </label>

                        <label for="reset">
                           <a class="btn btn-dark text-warning" href="<?= site_url('User'); ?>" role="button">Annuler</a>
                        </label>

                     </fieldset>
      </form>
   </div>
</div> -->
<!-- <div class="card text-white bg-dark mb-3 text-warning" style="max-width: 18rem;">
               <div class="card-header">Header</div>
               <div class="card-body">
                  <h5 class="card-title">Dark card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
               </div>
            </div>

            <div class="card-group text-warning mb-3">
               <div class="card bg-dark">
                  <img class="card-img-top" src=".../100px180/" alt="Card image cap">
                  <div class="card-body">
                     <h5 class="card-title">Card title</h5>
                     <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  </div>
                  <div class="card-footer">
                     <small class="text-muted">Last updated 3 mins ago</small>
                  </div>
               </div>
               <div class="card bg-dark">
                  <img class="card-img-top" src=".../100px180/" alt="Card image cap">
                  <div class="card-body">
                     <h5 class="card-title">Card title</h5>
                     <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                  </div>
                  <div class="card-footer">
                     <small class="text-muted">Last updated 3 mins ago</small>
                  </div>
               </div>
               <div class="card bg-dark">
                  <img class="card-img-top" src=".../100px180/" alt="Card image cap">
                  <div class="card-body">
                     <h5 class="card-title">Card title</h5>
                     <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                  </div>
                  <div class="card-footer">
                     <small class="text-muted">Last updated 3 mins ago</small>
                  </div>
               </div>
            </div>
            -->
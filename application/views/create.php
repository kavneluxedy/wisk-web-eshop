<!-- 
<div class="card text-white bg-dark mb-3 text-warning" style="max-width: 18rem;">
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

<!-- 
-------------------------------------------------------------------------------------
FORMULAIRE
-------------------------------------------------------------------------------------
 -->
<div class="row">
   <div class="align-self-baseline">
      <form class='col-auto align-self-baseline' method="POST" action="<?= base_url('User/create'); ?>" id="form">
         <fieldset class="d-flex flex-column flex-wrap-col">
            <form class="form-group" name="createUser" method="POST" action="<?= site_url('User'); ?>">

               <div class="form-group">
                  <label for="acc_username">Login
                     <input type="text" id="acc_username" class="form-control" name="acc_username">
                     <?= form_error('acc_username'); ?>
                  </label>
               </div>

               <div class="form-group">
                  <label for="acc_username">Login
                     <input type="text" id="acc_username" class="form-control" name="acc_username">
                     <?= form_error('acc_username'); ?>
                  </label>
               </div>

               <div class="form-group">
                  <label for="acc_username">Login
                     <input type="text" id="acc_username" class="form-control" name="acc_username">
                     <?= form_error('acc_username'); ?>
                  </label>
               </div>

               <div class="form-group">
                  <label for="acc_pass">Mot de passe
                     <input type="password" id="acc_pass" class="form-control" name="acc_pass" placeholder="8 characters required">
                     <?= form_error('acc_pass'); ?>
                  </label>
               </div>

               <div class="form-group">
                  <label for="acc_email">Email
                     <input type="email" id="acc_email" class="form-control" name="acc_email" placeholder="Example@domain.com">
                     <?= form_error('acc_email'); ?>
                  </label>
               </div>

               <div class="form-group">
                  <label for="secret_id">Question secrète
                     <input type="number" id="secret_id" class="form-control" name="secret_id" min="1" max="2" placeholder="1">
                     <?= form_error('secret_id'); ?>
                  </label>
               </div>

               <div class="d-flex flex-wrap-col">
                  <label for="submit">
                     <input type="submit" id="submit" class="form-control bg-dark text-warning" placeholder="Valider">
                  </label>

                  <label for="reset">
                     <a class="btn btn-dark text-warning" href="<?= site_url('User'); ?>" role="button">Annuler</a>
                  </label>
               </div>

            </form>
         </fieldset>
      </form>
   </div>
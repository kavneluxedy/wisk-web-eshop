<fieldset class="d-flex flex-column flex-wrap-col">
   <form class="form-group" name="createUser" method="POST" action="<?= base_url('User/create'); ?>">

      <div class="form-group">
         <label for="acc_username">Nom
            <input type="text" id="acc_username" class="form-control" name="acc_username">
            <?= form_error('acc_username'); ?>
         </label>
      </div>

      <div class="form-group">
         <label for="acc_pass">Mot de passe
            <input type="password" id="acc_pass" class="form-control" name="acc_pass">
            <?= form_error('acc_pass'); ?>
         </label>
      </div>

      <div class="form-group">
         <label for="acc_email">Email
            <input type="text" id="acc_email" class="form-control" name="acc_email">
            <?= form_error('acc_email'); ?>
         </label>
      </div>

      <div class="form-group">
         <label for="secret_id">Question secrète
            <input type="text" id="secret_id" class="form-control" name="secret_id">
            <?= form_error('secret_id'); ?>
         </label>
      </div>

      <div class="d-flex flex-wrap-col">
         <label for="submit">
            <input type="submit" id="submit" class="form-control bg-dark text-warning" placeholder="Valider">
         </label>

         <label for="reset">
            <a class="btn btn-dark text-warning" href="<?= base_url('User'); ?>" role="button">Annuler</a>
         </label>
      </div>
      
   </form>
</fieldset>
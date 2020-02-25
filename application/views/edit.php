<fieldset class="d-flex flex-column flex-wrap-col">
   <form class="form-group" name="updateUser" method="POST" action="<?= base_url('User/edit/') . $user['acc_id']; ?>">

      <div class="form-group">
         <label for="acc_username">Nom
            <input type="text" id="acc_username" class="form-control" name="acc_username" value="<?= set_value('acc_username', $user['acc_username']); ?>">
         </label>
         <?= form_error('acc_username'); ?>
      </div>

      <div class="form-group">
         <label for="acc_pass">Mot de passe
            <input type="password" id="acc_pass" class="form-control" name="acc_pass" value="<?= set_value('acc_pass', $user['acc_pass']); ?>">
         </label>
         <?= form_error('acc_pass'); ?>
      </div>

      <div class="form-group">
         <label for="acc_email">Email
            <input type="email" id="acc_email" class="form-control" name="acc_email" value="<?= set_value('acc_email', $user['acc_email']); ?>">
         </label>
         <?= form_error('acc_email'); ?>
      </div>

      <div class="d-flex flex-wrap-col">
         <label for="submit">
            <input type="submit" id="submit" class="form-control bg-success" placeholder="Valider">
         </label>

         <label for="reset">
            <a class="btn btn-warning" id="reset" href="<?= base_url('User'); ?>" role="button">Annuler</a>
         </label>
      </div>

   </form>
</fieldset>
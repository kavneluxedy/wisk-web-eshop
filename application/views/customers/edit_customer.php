<fieldset class="d-flex flex-column flex-wrap-col">
    <form class="form-group" name="updateUser" method="POST" action="<?= base_url('User/edit_customer/176'); ?>">

        <div class="form-group">
            <label for="acc_username">Nom
                <input type="text" id="acc_username" class="form-control shadow transition" name="acc_username" value="<?= set_value("acc_username", ""); ?>">
            </label>
        </div>

        <div class="form-group">
            <label for="acc_email">Email
                <input type="email" id="acc_email" class="form-control shadow transition" name="acc_email" value="<?= set_value('acc_email'); ?>">
            </label>
        </div>

        <div class="form-group">
            <label for="acc_pass">Mot de passe
                <input type="password" id="acc_pass" class="form-control shadow transition" name="acc_pass" value="<?= set_value(''); ?>">
            </label>

        </div>

        <div class="d-flex flex-wrap-col">
            <label for="submit">
                <input type="submit" id="submit" class="form-control bg-dark text-warning">
            </label>

            <label for="reset">
                <a class="btn btn-dark text-danger" id="reset" href="<?= base_url('User'); ?>" role="button">Annuler</a>
            </label>
        </div>

    </form>
</fieldset>
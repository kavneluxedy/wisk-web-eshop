<div class="row">
    <div class="col-6 mb-5 d-flex flex-inline flex-wrap">

        <form method="POST" action="<?php base_url('User/login_validation'); ?>">

            <label for="name">Identifiant
                <input type='text' class='form-control bg-dark text-warning' name='acc_username' value="<?= set_value('acc_username'); ?>">
            </label>

            <label for="cat">Mot de passe
                <input type='password' class='form-control bg-dark text-warning' name='acc_pass'>
            </label>

            <input type="submit" name='insert' class='form-control btn-dark text-warning mb-2'>
            <input type="reset" class='form-control btn-dark text-warning'>

        </form>
    </div>
</div>
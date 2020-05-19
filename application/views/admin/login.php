<div class="row">
	<div class="col-6 mb-5 d-flex flex-inline flex-wrap">
		<form method="POST" action="<?php base_url('User/login_validation'); ?>">

			<label for="name">Entrer votre Identifiant
				<input type='text' class='form-control bg-dark text-warning' name='acc_username'>
				<span class="text-danger"><?= form_error('acc_username'); ?></span>
			</label>

			<label for="cat">Entrer votre Mot de passe
				<input type='password' class='form-control bg-dark text-warning' name='acc_pass'>
				<span class="text-danger"><?= form_error('acc_pass'); ?></span>
			</label>

			<input type="submit" name='insert' class='form-control btn-dark text-warning mb-2'>
			<input type="reset" class='form-control btn-dark text-warning'>

			<?= $this->session->flashdata('error'); ?>

		</form>
	</div>
</div>